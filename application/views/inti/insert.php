<div class="container py-4">
  <div class="mb-4">
    <h3 class="mb-2">Input Pertanyaan</h3>
    <p class="text-muted mb-0">Masukkan pertanyaan dan buat jawaban 3 sampai 5 pilihan. Pilih warna level untuk setiap jawaban, warna ini akan digunakan untuk leveling urgent.</p>
  </div>

  <form id="questionForm">
    <div class="mb-3">
      <label class="form-label">Pertanyaan</label>
      <input type="text" name="question" class="form-control" placeholder="Masukkan pertanyaan" />
    </div>

    <div id="answerRows">
      <div class="row align-items-end mb-3 answer-row">
        <div class="col-md-5 mb-2">
          <label class="form-label">Jawaban</label>
          <input type="text" name="answers[]" class="form-control" placeholder="Masukkan jawaban" />
        </div>
        <div class="col-md-5 mb-2">
          <label class="form-label">Warna Level</label>
          <select name="levels[]" class="form-select soft-level-select soft-level-hijau">
            <option value="hijau" data-class="soft-level-hijau">Hijau</option>
            <option value="kuning" data-class="soft-level-kuning">Kuning</option>
            <option value="merah" data-class="soft-level-merah">Merah</option>
          </select>
        </div>
        <div class="col-md-2 mb-2 text-end">
          <button type="button" class="btn btn-outline-danger w-100 remove-row-btn" title="Hapus jawaban">🗑️</button>
        </div>
      </div>

      <div class="row align-items-end mb-3 answer-row">
        <div class="col-md-5 mb-2">
          <label class="form-label">Jawaban</label>
          <input type="text" name="answers[]" class="form-control" placeholder="Masukkan jawaban" />
        </div>
        <div class="col-md-5 mb-2">
          <label class="form-label">Warna Level</label>
          <select name="levels[]" class="form-select soft-level-select soft-level-hijau">
            <option value="hijau" data-class="soft-level-hijau">Hijau</option>
            <option value="kuning" data-class="soft-level-kuning">Kuning</option>
            <option value="merah" data-class="soft-level-merah">Merah</option>
          </select>
        </div>
        <div class="col-md-2 mb-2 text-end">
          <button type="button" class="btn btn-outline-danger w-100 remove-row-btn" title="Hapus jawaban">🗑️</button>
        </div>
      </div>

      <div class="row align-items-end mb-3 answer-row">
        <div class="col-md-5 mb-2">
          <label class="form-label">Jawaban</label>
          <input type="text" name="answers[]" class="form-control" placeholder="Masukkan jawaban" />
        </div>
        <div class="col-md-5 mb-2">
          <label class="form-label">Warna Level</label>
          <select name="levels[]" class="form-select soft-level-select soft-level-hijau">
            <option value="hijau" data-class="soft-level-hijau">Hijau</option>
            <option value="kuning" data-class="soft-level-kuning">Kuning</option>
            <option value="merah" data-class="soft-level-merah">Merah</option>
          </select>
        </div>
        <div class="col-md-2 mb-2 text-end">
          <button type="button" class="btn btn-outline-danger w-100 remove-row-btn" title="Hapus jawaban">🗑️</button>
        </div>
      </div>
    </div>

    <div class="d-flex gap-2 mt-3">
      <button type="button" id="addRowBtn" class="btn btn-outline-primary">Tambah Opsi</button>
      <button type="submit" class="btn btn-outline-secondary">Simpan Pertanyaan</button>
    </div>
  </form>
</div>

<style>
  .soft-level-select {
    transition: background-color 0.2s ease, color 0.2s ease;
  }

  .soft-level-hijau {
    background-color: #dff4dd;
    color: #2f5f31;
  }

  .soft-level-kuning {
    background-color: #fff7d8;
    color: #7a6200;
  }

  .soft-level-merah {
    background-color: #f7d8dc;
    color: #7e2231;
  }
</style>

<script>
  (function () {
    const maxRows = 5;
    const minRows = 3;
    const answerRows = document.getElementById('answerRows');
    const addRowBtn = document.getElementById('addRowBtn');
    const removeRowBtn = document.getElementById('removeRowBtn');

    function createAnswerRow() {
      const row = document.createElement('div');
      row.className = 'row align-items-end mb-3 answer-row';
      row.innerHTML = `
        <div class="col-md-5 mb-2">
          <label class="form-label">Jawaban</label>
          <input type="text" name="answers[]" class="form-control" placeholder="Masukkan jawaban" />
        </div>
        <div class="col-md-5 mb-2">
          <label class="form-label">Warna Level</label>
          <select name="levels[]" class="form-select soft-level-select soft-level-hijau">
            <option value="hijau" data-class="soft-level-hijau">Hijau</option>
            <option value="kuning" data-class="soft-level-kuning">Kuning</option>
            <option value="merah" data-class="soft-level-merah">Merah</option>
          </select>
        </div>
        <div class="col-md-2 mb-2 text-end">
          <button type="button" class="btn btn-outline-danger w-100 remove-row-btn" title="Hapus jawaban">🗑️</button>
        </div>
      `;
      const select = row.querySelector('select');
      select.addEventListener('change', updateSelectStyle);

      const removeBtn = row.querySelector('.remove-row-btn');
      removeBtn.addEventListener('click', function () {
        const rows = answerRows.querySelectorAll('.answer-row');
        if (rows.length > minRows) {
          row.remove();
          updateButtons();
        }
      });

      return row;
    }

    function updateSelectStyle(event) {
      const select = event.target;
      select.classList.remove('soft-level-hijau', 'soft-level-kuning', 'soft-level-merah');
      const selectedClass = select.selectedOptions[0].dataset.class;
      if (selectedClass) {
        select.classList.add(selectedClass);
      }
    }

    function updateButtons() {
      const rows = answerRows.querySelectorAll('.answer-row');
      const count = rows.length;
      addRowBtn.disabled = count >= maxRows;
      removeRowBtn.disabled = count <= minRows;
      rows.forEach(function (row) {
        const removeBtn = row.querySelector('.remove-row-btn');
        if (removeBtn) {
          removeBtn.disabled = count <= minRows;
        }
      });
    }

    addRowBtn.addEventListener('click', function () {
      const count = answerRows.querySelectorAll('.answer-row').length;
      if (count < maxRows) {
        answerRows.appendChild(createAnswerRow());
        updateButtons();
      }
    });

    removeRowBtn.addEventListener('click', function () {
      const rows = answerRows.querySelectorAll('.answer-row');
      if (rows.length > minRows) {
        rows[rows.length - 1].remove();
        updateButtons();
      }
    });

    answerRows.querySelectorAll('select').forEach(function (select) {
      select.addEventListener('change', updateSelectStyle);
    });

    answerRows.querySelectorAll('.remove-row-btn').forEach(function (button) {
      button.addEventListener('click', function () {
        const rows = answerRows.querySelectorAll('.answer-row');
        if (rows.length > minRows) {
          button.closest('.answer-row').remove();
          updateButtons();
        }
      });
    });

    updateButtons();
  })();
</script>
