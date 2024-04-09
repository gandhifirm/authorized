<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Buat Akun Peserta
                    </div>

                    <div class="card-body">
                        <form wire:submit.prevent='registerUser'>
                            {{-- Full Name --}}
                            <div class="row mb-3">
                                <label for="full_name" class="col-md-4 col-form-label text-md-end">
                                    Full Name
                                </label>

                                <div class="col-md-6">
                                    <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" wire:model.defer='full_name' placeholder="Nama Lengkap" autofocus>

                                    @error('full_name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Full Name --}}

                            {{-- Gelar Depan & Belakang --}}
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">
                                    Gelar Depan & Belakang
                                </label>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <input id="front_degree" type="text" class="form-control @error('front_degree') is-invalid @enderror" wire:model.defer='front_degree' placeholder="Gelar Depan">
                                        </div>

                                        <div class="col-6">
                                            <input id="back_degree" type="text" class="form-control @error('back_degree') is-invalid @enderror" wire:model.defer='back_degree' placeholder="Gelar Belakang">
                                        </div>
                                    </div>

                                    @error('front_degree')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror

                                    @error('back_degree')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Gelar Depan & Belakang --}}

                            {{-- Username --}}
                            <div class="row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-end">
                                    Username
                                </label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" wire:model.defer='username' placeholder="Username">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Username --}}

                            {{-- Email Address --}}
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">
                                    Email Address
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" wire:model.defer='email' placeholder="Alamat Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Email Address --}}

                            {{-- Phone Number --}}
                            <div class="row mb-3">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-end">
                                    Phone Number
                                </label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" wire:model.defer='phone_number' placeholder="Nomor Whatsapp">

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Phone Number --}}

                            {{-- Password --}}
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">
                                    Password
                                </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" wire:model.defer='password' placeholder="Buat Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Password --}}

                            {{-- Password Confirm --}}
                            <div class="row mb-3">
                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">
                                    Password Confirm
                                </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" wire:model.defer='password_confirmation' placeholder="Konfirmasi Password">

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Password Confirm --}}

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Buat Akun
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
