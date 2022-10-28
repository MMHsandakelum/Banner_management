<!DOCTYPE html>
<html lang="en">
@include ('layout.header')

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include ('layout.sidenav')
    <main class="main-content mt-0 ">
        @include ('layout.navbar')


        <div class="container-fluid py-4">
            @include ('layout.cards')


        </div>
    </main>

    @include ('layout.footer')
</body>

</html>