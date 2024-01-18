// JAM DIGITAL

function updateJamDigital() {
  const jamDigital = document.getElementById('jamDigital');
  const waktuSekarang = new Date();
  const jam = waktuSekarang.getHours().toString().padStart(2, '0');
  const menit = waktuSekarang.getMinutes().toString().padStart(2, '0');
  const detik = waktuSekarang.getSeconds().toString().padStart(2, '0');

  jamDigital.textContent = `${jam}:${menit}:${detik}`;
}

setInterval(updateJamDigital, 1000);
updateJamDigital();
