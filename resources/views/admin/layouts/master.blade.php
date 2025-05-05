{{-- Include Meta Tags --}}
@include('admin.partials.__meta-tags')

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

        @include('admin.layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2025 <div class="bullet"></div> {{ config('app.name') }}
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>


  <!-- General JS Scripts -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

  <script src="{{ asset('admin/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/stisla.js') }}"></script>

  {{-- <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> --}}

  <script src="https://cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.3/js/dataTables.buttons.min.js"></script>

  <script src="{{ asset('admin/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/nicEdit.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')}}"></script>
  <script src="{{ asset('admin/assets/modules/summernote/summernote-bs4.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('admin/assets/js/page/upload-preview.js') }}"></script>


  <!-- Custom JS File -->
  <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('admin/assets/js/custom.js') }}"></script>


  @stack('scripts')

</body>
</html>
