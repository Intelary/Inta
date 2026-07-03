<style>
  .blog-page {
    padding-bottom: 180px;
  }

  /* ── Toolbar ── */
  .blog-toolbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 20px;
  }

  .blog-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .blog-filter-btn {
    height: 36px;
    padding: 0 18px;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: filter 0.15s ease;
    border-radius: 14px;
    border: none;
  }

  .blog-filter-btn:hover {
    filter: brightness(0.95);
  }

  /* Semua — biru */
  .blog-filter-btn[data-filter="all"] {
    background: #e8f2fb;
    border-color: #b6d4ee;
    color: #2c6088;
  }

  /* Psikologi — merah */
  .blog-filter-btn.danger {
    background: #fbeaea;
    border-color: #e8a8a8;
    color: #a14545;
  }

  /* Gaya Hidup — kuning */
  .blog-filter-btn.warning {
    background: #fbf1df;
    border-color: #e8c97a;
    color: #9c6b1f;
  }

  /* Makanan — hijau */
  .blog-filter-btn.success {
    background: #e9f4e3;
    border-color: #a3d48f;
    color: #4a7a3a;
  }

  /* Active state — sedikit lebih pekat */
  .blog-filter-btn.active {
    filter: brightness(0.93);
    font-weight: 700;
  }

  .blog-btn-add {
    width: 52px;
    height: 36px;
    border-radius: 14px;
    border: none;
    background: #dcefe6;
    color: #1f7a5c;
    font-size: 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0;
    overflow: hidden;
    cursor: pointer;
    white-space: nowrap;
    transition: width 0.3s ease, border-radius 0.3s ease, gap 0.3s ease, background 0.2s ease;
  }

  .blog-btn-add .btn-icon {
    flex-shrink: 0;
    font-size: 20px;
    transition: opacity 0.15s ease, width 0.3s ease;
  }
</style>

<div class="blog-page">
  <p class="lead">Hallo !</p>

  <!-- Filter + Tambah Button -->
  <div class="blog-toolbar">
    <div class="blog-filters">
      <button type="button" class="blog-filter-btn success" data-bs-toggle="modal" data-bs-target="#intiMualModal">Mual</button>
      <button type="button" class="blog-filter-btn danger" data-bs-toggle="modal" data-bs-target="#intiMuntahModal">Muntah</button>
      <button type="button" class="blog-filter-btn danger" data-bs-toggle="modal" data-bs-target="#intiFatigueModal">Kelelahan</button>
      <button type="button" class="blog-filter-btn danger" data-bs-toggle="modal" data-bs-target="#intiMukositisModal">Masalah Mulut & Tenggorokan</button>
    </div>
    <button type="button" class="blog-btn-add">
      <i class="bi bi-plus-lg btn-icon"></i>
      <!-- <span class="btn-label">Tambah Blog</span> -->
    </button>
  </div>
</div>

<?php $this->load->view('modal/mual'); ?>
<?php $this->load->view('modal/muntah'); ?>
<?php $this->load->view('modal/fatigue'); ?>
<?php $this->load->view('modal/mukositis'); ?>