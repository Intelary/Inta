<style>
#intiMukositisModal .answer-card:nth-child(1):hover,
#intiMukositisModal .answer-card:nth-child(2):hover {
  background: #e9f4e3;
  border-color: #c5ddb8;
  color: #4a7a3a;
}

#intiMukositisModal .answer-card:nth-child(3):hover,
#intiMukositisModal .answer-card:nth-child(4):hover {
  background: #fdf2f2;
  border-color: #f0cece;
  color: #a05050;
}
</style>

<div class="modal fade inti-modal" id="intiMukositisModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <p class="inti-question">Apakah kamu mengalami mukositis saat ini?</p>
        <div class="inti-grid">
          <button type="button" class="answer-card">A</button>
          <button type="button" class="answer-card">B</button>
          <button type="button" class="answer-card">C</button>
          <button type="button" class="answer-card">D</button>
        </div>
        <button type="button" class="inti-close" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
