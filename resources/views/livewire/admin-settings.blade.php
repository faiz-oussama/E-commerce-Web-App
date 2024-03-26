<div>
    <div class="tab">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a wire:click.prevent='selectTab("general_settings")' class="nav-link text-blue {{$tab == 'general_settings' ? 'active' : '' }}" data-toggle="tab" href="#general_settings" role="tab" aria-selected="true">General settings</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("logo_favicon")' class="nav-link text-blue {{$tab == 'logo_favicon' ? 'active' : '' }}" data-toggle="tab" href="#logo_favicon" role="tab" aria-selected="false">Logo and Favicon</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("social_networks")' class="nav-link text-blue {{$tab == 'social_networks' ? 'active' : '' }}" data-toggle="tab" href="#social_networks" role="tab" aria-selected="false">Social networks</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("payment_methods")' class="nav-link text-blue {{$tab == 'payment_methods' ? 'active' : '' }}" data-toggle="tab" href="#payment_methods" role="tab" aria-selected="false">Payment methods</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade {{$tab == 'general_settings' ? 'active show' : '' }}" id="general_settings" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit.prevent='updateGeneralSettings()'>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site name</b></label>
                                    <input type="text" class="form-control" placeholder="Enter site name" wire:model = 'site_name'>
                                    @error('site_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site email</b></label>
                                    <input type="text" class="form-control" placeholder="Enter site email" wire:model = 'site_email'>
                                    @error('site_email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site phone</b></label>
                                    <input type="text" class="form-control" placeholder="Enter site phone" wire:model = 'site_phone'>
                                    @error('site_phone')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site meta keywords</b></label>
                                    <input type="text" class="form-control" placeholder="Enter site meta keywords" wire:model = 'site_meta_keywords'>
                                    @error('site_meta_keywords')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Site address</b></label>
                            <input type="text" class="form-control" placeholder="Enter site address" wire:model = 'site_address'>
                            @error('site_address')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""><b>Site meta description</b></label>
                            <textarea class="form-control" wire:model='site_meta_description' cols="4" rows="4" placeholder="Site meta description"></textarea>
                            @error('site_phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade {{$tab == 'logo_favicon' ? 'active show' : '' }}" id="logo_favicon" role="tabpanel">
                <div class="pd-20">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Site logo</h5>
                            <div class="mb-2 mt-1" style="max-width:400px">
                                <img src="/images/site/{{$site_logo}}" class="img-thumbnail" id="site_logo_image_preview">
                                <form action="{{route('admin.change-logo')}}" method="POST" enctype="multipart/form-data" id="change_site_logo_form">
                                @csrf
                                    <div class="mb-2">
                                        <input type="file" name="site_logo" id="site_logo" class="form-control">
                                        <span class="text-danger error-text site_logo_error"></span>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Change Logo</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{$tab == 'social_networks' ? 'active show' : '' }}" id="social_networks" role="tabpanel">
                <div class="pd-20">
                </div>
            </div>
            <div class="tab-pane fade {{$tab == 'payment_methods' ? 'active show' : '' }}" id="payment_methods" role="tabpanel">
                <div class="pd-20">
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var storedLogoUrl = localStorage.getItem('/images/site/');
    if (storedLogoUrl) {
        // If logo URL is found, set the src attribute of the image
        document.getElementById('site_logo_image_preview').src = storedLogoUrl;
    }

    // Handle form submission to update logo and store its URL in localStorage
    document.getElementById('change_site_logo_form').addEventListener('submit', function(e) {
        e.preventDefault();
        var form = e.target;
        var formData = new FormData(form);

        // Perform AJAX request to update logo
        // Assuming successful update, update logo URL in localStorage
        // For demonstration purposes, I'm just setting a placeholder URL
        var newLogoUrl = '/images/site/{{$site_logo}}';
        localStorage.setItem('site_logo_url', newLogoUrl);

        // Update image src attribute with the new logo URL
        document.getElementById('site_logo_image_preview').src = newLogoUrl;

        // Reset the form or perform any other necessary actions
        form.reset();
    });
</script>