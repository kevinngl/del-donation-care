<x-auth-layout title="Login">

    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url(assets/media/illustrations/development-hd.png)">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="{{ route('home') }}" class="mb-12">
                    <img alt="Logo" src="{{ asset('assets/ddc.png') }}" class="h-100px" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" id="form_login">
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Login to Office</h1>
                            <!--end::Title-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <!-- autocomplete="on"-->
                            <input class="form-control form-control-lg form-control-solid" type="text" id="email"
                                name="email" data-login="1" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                id="password" name="password" data-login="2" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Role</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="role" id="role" class="form-select">
                                <option value="admin">Admin</option>
                                <option value="supervisor">Supervisor</option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button id="tombol_login"
                                onclick="auth('#tombol_login','#form_login','{{ route('office.login') }}','Login');"
                                type="button" class="btn btn-lg btn-primary w-100 mb-5" data-login="3">
                                Masuk
                            </button>
                            <!--end::Submit button-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
</x-auth-layout>
