@extends('layout.user.template')

@section('title', 'Contacto')

@section('content')
<!-- Pop-up para mensaje enviado -->
@if(session('success'))
<div id="popup" class="fixed inset-0 flex items-center justify-center  bg-opacity-50 z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <h3 class="text-lg font-bold mb-4">{{ session('success') }}</h3>
        <button onclick="closePopup()" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Aceptar</button>
    </div>
</div>
<script>
    function closePopup() {
        document.getElementById('popup').remove();
    }
</script>
@elseif(session('error'))
<div id="popup" class="fixed inset-0 flex items-center justify-center  bg-opacity-50 z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <h3 class="text-lg font-bold mb-4">{{ session('error') }}</h3>
        <button onclick="closePopup()" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-green-600">Aceptar</button>
    </div>
</div>
<script>
    function closePopup() {
        document.getElementById('popup').remove();
    }
</script>
@endif

    <!-- CONTACTO -->
    <section class="bg-gray-50 py-16 my-8">
        <div class="container mx-auto px-4">
            <h4 class="text-3xl font-bold text-center mb-6">Contáctanos</h4>
            <hr class="my-6 border-gray-300">
            <div class="flex flex-col md:flex-row gap-10">
                <form class="flex-1 space-y-6 bg-white rounded-lg shadow p-8"  action="{{ route('contacto.store') }}" method="POST" enctype="multipart/form-data" id="for">
                    @csrf
                    <div>
                        <label for="exampleFormControlInput2" class="block font-semibold mb-2">Nombre</label>
                        <input type="text" name="nombres" class="w-full rounded border-gray-300 px-4 py-2 focus:ring-emerald-400"
                            id="exampleFormControlInput2" value="{{ old('nombres') }}" placeholder="Nombre">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="block font-semibold mb-2">Email</label>
                        <input type="email" name="email" class="w-full rounded border-gray-300 px-4 py-2 focus:ring-emerald-400"
                            id="exampleFormControlInput1" value="{{ old('email') }}" placeholder="name@example.com">
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1" class="block font-semibold mb-2">Mensaje</label>
                        <textarea name="mensaje" {{ old('mensaje') }} class="w-full rounded border-gray-300 px-4 py-2 focus:ring-emerald-400" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-green-400 hover:bg-emerald-600 text-white px-8 py-2 rounded font-semibold transition">Enviar</button>
                </form>
                <div class="flex-1 flex items-center justify-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.410276127892!2d-79.04060262589138!3d-8.115327781204812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d9fb3467261%3A0x752547ad9a204df6!2sUniversidad%20Nacional%20de%20Trujillo%20(UNT)!5e1!3m2!1ses-419!2spe!4v1734127574943!5m2!1ses-419!2spe"
                        width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""
                        class="rounded-lg shadow"></iframe>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="flex items-center gap-5 bg-white rounded-lg shadow p-6">
                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png"
                        class="w-14 h-14">
                    <div>
                        <h6 class="font-semibold text-lg">Dirección</h6>
                        <p class="text-gray-600">601 Sherwood Ave.<br>San Pablo</p>
                    </div>
                </div>
                <div class="flex items-center gap-5 bg-white rounded-lg shadow p-6">
                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png"
                        class="w-14 h-14">
                    <div>
                        <h6 class="font-semibold text-lg">Teléfono</h6>
                        <p class="text-gray-600">951 546 944<br>630 446 8851</p>
                    </div>
                </div>
                <div class="flex items-center gap-5 bg-white rounded-lg shadow p-6">
                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png"
                        class="w-14 h-14">
                    <div>
                        <h6 class="font-semibold text-lg">Email</h6>
                        <p class="text-gray-600">info@gmail.com<br>123@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
