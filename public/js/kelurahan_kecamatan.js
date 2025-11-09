const dataMalang = {
    'Klojen': ['Bareng', 'Kasin', 'Gading Kasin', 'Kauman', 'Kidul Dalem', 'Oro-oro Dowo', 'Penanggungan', 'Rampal Celaket', 'Samaan', 'Sukoharjo'],
    'Blimbing': ['Arjosari', 'Balearjosari', 'Blimbing', 'Jatimulyo', 'Kesatrian', 'Pandanwangi', 'Purwantoro', 'Purwodadi', 'Polehan', 'Bunulrejo'],
    'Kedungkandang': ['Arjowinangun', 'Bumiayu', 'Buring', 'Cemorokandang', 'Kedungkandang', 'Kotalama', 'Madyopuro', 'Mergosono', 'Sawojajar', 'Wonokoyo'],
    'Sukun': ['Bandungrejosari', 'Bakalankrajan', 'Ciptomulyo', 'Gadingkasri', 'Karangbesuki', 'Mulyorejo', 'Sukun', 'Tanjungrejo', 'Bandulan', 'Karangtengah'],
    'Lowokwaru': ['Jatimulyo', 'Ketawanggede', 'Lowokwaru', 'Mojolangu', 'Sumbersari', 'Tlogomas', 'Tulusrejo', 'Tasikmadu', 'Tunggulwulung', 'Dinoyo', 'Merjosari']
};

const kecamatanDropdown = document.getElementById('kecamatanDropdown');
const kelurahanDropdown = document.getElementById('kelurahanDropdown');

function populateKecamatan() {
    const kecamatanList = Object.keys(dataMalang);

    kecamatanList.forEach(kecamatan => {
        const option = document.createElement('option');
        option.value = kecamatan;
        option.textContent = kecamatan;
        kecamatanDropdown.appendChild(option);
    });
}

function populateKelurahan(selectedKecamatan) {
    kelurahanDropdown.innerHTML = '<option value="">Pilih Kelurahan</option>';

    if (!selectedKecamatan) {
        kelurahanDropdown.disabled = true;
        return;
    }

    kelurahanDropdown.disabled = false;
    
    const kelurahanList = dataMalang[selectedKecamatan] || [];

    kelurahanList.forEach(kelurahan => {
        const option = document.createElement('option');
        option.value = kelurahan;
        option.textContent = kelurahan;
        kelurahanDropdown.appendChild(option);
    });
}

populateKecamatan();

kecamatanDropdown.addEventListener('change', function() {
    const selectedKecamatan = this.value;
    populateKelurahan(selectedKecamatan);
});