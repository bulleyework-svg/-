
import { BrowserMultiFormatReader } from '@zxing/browser';

const video = document.getElementById('preview');
const czInput = document.getElementById('cz');
const skuInput = document.getElementById('sku');
const msg = document.getElementById('msg');

// very small beep using WebAudio
function beep(){
  try{
    const ctx = new (window.AudioContext || window.webkitAudioContext)();
    const o = ctx.createOscillator();
    const g = ctx.createGain();
    o.type = 'sine';
    o.frequency.value = 880;
    o.connect(g); g.connect(ctx.destination);
    g.gain.value = 0.05;
    o.start();
    setTimeout(()=>{ o.stop(); ctx.close(); }, 120);
  }catch(e){}
}

async function start(){
  const codeReader = new BrowserMultiFormatReader();
  const devices = await BrowserMultiFormatReader.listVideoInputDevices();
  const deviceId = devices[0]?.deviceId;
  const controls = await codeReader.decodeFromVideoDevice(deviceId, video, (result, err) => {
    if(result){
      const text = result.getText();
      // Prevent flooding if the same code
      if(czInput.value !== text){
        czInput.value = text;
        beep();
        msg.textContent = 'Код распознан. Введите SKU и нажмите Привязать.';
      }
    }
  });

  document.getElementById('czForm').addEventListener('submit', async (e)=>{
    e.preventDefault();
    const res = await fetch('/api/cz/attach', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'X-Requested-With':'XMLHttpRequest' },
      body: JSON.stringify({ code: czInput.value, sku: skuInput.value })
    });
    const data = await res.json();
    msg.textContent = data.message || 'Готово';
  });
}
start().catch(e=>{ msg.textContent = 'Нет доступа к камере: ' + e; });
