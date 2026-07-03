<style>
/* Tidak ada → hijau */
#intiFatigueModal .answer-card:nth-child(1):hover {
  background: #e9f4e3;
  border-color: #c5ddb8;
  color: #4a7a3a;
}

/* Grade 1 → hijau */
#intiFatigueModal .answer-card:nth-child(2):hover {
  background: #e9f4e3;
  border-color: #c5ddb8;
  color: #4a7a3a;
}

/* Grade 2 → kuning */
#intiFatigueModal .answer-card:nth-child(3):hover {
  background: #fef9ec;
  border-color: #f0e4a8;
  color: #9c7a2a;
}

/* Grade 3 → merah */
#intiFatigueModal .answer-card:nth-child(4):hover {
  background: #fdf2f2;
  border-color: #f0cece;
  color: #a05050;
}
</style>

<div class="modal fade inti-modal" id="intiFatigueModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <p class="inti-question">Apakah kamu merasakan kelelahan saat ini?</p>
        <div class="inti-grid">
          <button type="button" class="answer-card">Tidak merasa lelah sama sekali</button>
          <button type="button" class="answer-card">Lelah, tapi membaik setelah istirahat</button>
          <button type="button" class="answer-card">Lelah yang tidak hilang meski sudah istirahat, mulai mengganggu aktivitas harian</button>
          <button type="button" class="answer-card">Sangat lelah, bahkan kegiatan ringan sehari-hari pun terasa berat</button>
        </div>
        <button type="button" class="inti-close" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
