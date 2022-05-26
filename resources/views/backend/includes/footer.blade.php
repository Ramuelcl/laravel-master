<footer class="c-footer">
  <div>
    <strong>
      @lang('Copyright') &copy; {{ date('Y.m') }},
      <x-utils.link href="mailto:ramuelcl@gmail.com" target="_blank" :text="__(appName())" />
    </strong>

    @lang('All Rights Reserved')
  </div>

  <div class="mfs-auto">
    @lang('Powered by')
    <x-utils.link href="http://laravel-boilerplate.com" target="_blank" :text="__('laravel-boilerplate.com')" /> &
    <x-utils.link href="https://coreui.io" target="_blank" text="CoreUI" />
  </div>
</footer>
