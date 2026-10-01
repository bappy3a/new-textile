@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">About Us Page</h3>
        <p>Manage each section of the About Us page and its items.</p>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <ul class="nav nav-tabs mt-n3" role="tablist">
                    @foreach (\App\Models\AboutPageSection::SECTIONS as $key => $config)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $tab === $key ? 'active' : '' }}" data-bs-toggle="tab" href="#tab-{{ $key }}"
                                data-tab="{{ $key }}" role="tab">
                                <span>{{ $config['label'] }}</span>
                                @unless ($sections[$key]->is_active)
                                    <span class="badge bg-secondary ms-1">Hidden</span>
                                @endunless
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content">
                    @foreach ($sections as $key => $section)
                        {{-- Only the tab that was submitted gets old() input back after a validation error. --}}
                        @php($useOld = $tab === $key)
                        <div class="tab-pane {{ $tab === $key ? 'active show' : '' }}" id="tab-{{ $key }}" role="tabpanel">
                            @include('admin.about-page._section-form')
                            <hr class="my-4">
                            @include('admin.about-page._items-table')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // Keep the open tab in the URL so reloads and back-navigation land on the same section.
    document.querySelectorAll('[data-tab]').forEach(function (link) {
        link.addEventListener('shown.bs.tab', function () {
            const url = new URL(window.location);
            url.searchParams.set('tab', link.dataset.tab);
            history.replaceState(null, '', url);
        });
    });
</script>
@endsection
