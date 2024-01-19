function getInfoWaktuSekarang() {
  const waktuSekarang = new Date();

  const hari = waktuSekarang.getDate();
  const bulan = waktuSekarang.toLocaleString('default', { month: 'long' });
  const tahun = waktuSekarang.getFullYear();

  return { hari, bulan, tahun };
}

const waktuSekarang = getInfoWaktuSekarang();
document.getElementById('hari').innerText = `Tanggal: ${waktuSekarang.hari}`;
document.getElementById('bulan').innerText = `Bulan: ${waktuSekarang.bulan}`;
document.getElementById('tahun').innerText = `Tahun: ${waktuSekarang.tahun}`;
