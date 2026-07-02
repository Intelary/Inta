<div class="modal fade" id="intiMualModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="p-3 border rounded bg-light">
          <div class="mb-3 text-center">
            <!-- <p class="h5 mb-2">Pertanyaan</p> -->
            <p class="mb-0">Apakah kamu merasakan mual saat ini?</p>
          </div>

          <div class="answer-grid" data-option-count="4">
            <button type="button" class="btn btn-outline-primary answer-card">Jawaban 1</button>
            <button type="button" class="btn btn-outline-primary answer-card">Jawaban 2</button>
            <button type="button" class="btn btn-outline-primary answer-card">Jawaban 3</button>
            <button type="button" class="btn btn-outline-primary answer-card">Jawaban 4</button>
          </div>
        </div>

        <button type="button" class="btn btn-secondary mt-3 w-100" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<style>
  .answer-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 0.75rem;
  }

  .answer-card {
    min-height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    white-space: normal;
  }

  .answer-grid[data-option-count="3"] .answer-card:nth-child(3) {
    grid-column: span 2;
  }
</style>
