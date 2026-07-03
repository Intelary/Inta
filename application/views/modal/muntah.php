<style>
#intiMuntahModal .answer-card:nth-child(1):hover {
  background: #e9f4e3;
  border-color: #c5ddb8;
  color: #4a7a3a;
}

#intiMuntahModal .answer-card:nth-child(2):hover {
  background: #fef9ec;
  border-color: #f0e4a8;
  color: #9c7a2a;
}

#intiMuntahModal .answer-card:nth-child(3):hover {
  background: #fdf2f2;
  border-color: #f0cece;
  color: #a05050;
}
</style>

<div class="modal fade inti-modal" id="intiMuntahModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <p class="inti-question">Apakah kamu merasakan muntah saat ini?</p>
        <div class="inti-grid odd-last">
          <button type="button" class="answer-card">Tidak sama sekali</button>
          <button type="button" class="answer-card">Sedikit mual, tapi belum muntah</button>
          <button type="button" class="answer-card">Sudah muntah</button>
        </div>
        <button type="button" class="inti-close" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
