<!DOCTYPE html>
<html lang="en">
<head>
    @livewireStyles
</head>
<body>
    <!-- srart footer -->
    <footer class="bg-footer mt-5">
        <div class="container ">
            @livewire('message-live')
        </div>
        <div class="col-md-12 bg-footer-end mt-2">
            <div class="container">
                <div class="d-flex justify-content-between text-white">
                    <div class="mt-2">
                        <p>شروط الاستخدام وسياسة الخصوصية</p>
                    </div>
                    <div class="mt-2">
                        <p> جميع الحقوق محفوظة © 2023 </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@livewireScripts
</body>
</html>
