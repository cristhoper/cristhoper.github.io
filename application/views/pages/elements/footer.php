  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?=base_url('js/vendor/zepto')?>' : '<?=base_url('js/vendor/jquery')?>') +
  '.js><\/script>')
  </script>

  <script src="<?=base_url('js/foundation.min.js')?>"></script>

  <!--
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  -->

  <script>
    $(document).foundation();
  </script>
  <script>
    window.onload = function() {
        setTimeout(function(){window.scrollTo(0, 1);}, 1);
    }
  </script>
</body>
</html>
