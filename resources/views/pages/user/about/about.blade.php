@extends('layout.user.template')

@section('title', 'About')

@section('content')


<div class="container justify-center mx-auto mt-20 pt-20 bg-white flex flex-col gap-20">

  <div class="text-center">
    <h2 class="text-blue-500 font-semibold text-4xl ">ExploreDocs</h2>
    <div class="mx-auto bg-blue-600" style="width: 30%; height: 2px;"></div>
  </div>

  <div class="flex flex-col items-center px-3">
    <p class="text-center italic font-light max-w-4xl">
      Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
      Ad mauris est parturient varius molestie condimentum eleifend sit.
      Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
      Ad mauris est parturient varius molestie condimentum eleifend sit.
      Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
      Ad mauris est parturient varius molestie condimentum eleifend sit.
    </p>
  </div>

  <div class="flex flex-wrap justify-center items-center bg-gray-100 p-4 gap-20">
    <img src="https://www.skoolbeep.com/blog/wp-content/uploads/2020/12/HOW-DO-YOU-DESIGN-A-LIBRARY-MANAGEMENT-SYSTEM-min.png" alt="Main Image" class="rounded" style="width: 460px; height: 400px;" />
    <div class="flex flex-col gap-2 m-2">
      <div class="text-center md:text-left">
        <h3 class="text-blue-600 text-2xl font-bold">Visión</h3>
        <div class="bg-blue-600 mx-auto md:mx-0 w-36 h-0.5"></div>
      </div>
      <p class="italic font-light text-black max-w-lg">
        Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
        Ad mauris est parturient varius molestie condimentum eleifend sit.
        Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
        Ad mauris est parturient varius molestie condimentum eleifend sit.
      </p>
    </div>
  </div>

  <div class="flex flex-wrap md:flex-row-reverse justify-center items-center p-4 gap-20">
    <img src="https://www.xiphiastec.com/es/assets/img/technology/lms.png" alt="Highlighted Image" class="rounded" style="width: 460px; height: 350px;" />
    <div class="flex flex-col gap-2 m-2">
      <div class="text-center md:text-left">
        <h3 class="text-blue-600 text-2xl font-bold">Misión</h3>
        <div class="bg-blue-600 mx-auto md:mx-0 w-36 h-0.5"></div>
      </div>
      <p class="italic font-light text-black max-w-lg">
        Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
        Ad mauris est parturient varius molestie condimentum eleifend sit.
        Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
        Ad mauris est parturient varius molestie condimentum eleifend sit.
        Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
        Ad mauris est parturient varius molestie condimentum eleifend sit.
      </p>
    </div>
  </div>

  <div class="text-center">
    <h2 class="text-blue-600 text-4xl font-semibold">Nuestro Grupo</h2>
    <div class="mx-auto bg-blue-600" style="width: 30%; height: 2px;"></div>
  </div>

  <div class="flex flex-col items-center gap-3 px-3 mb-16">
    <p class="text-center italic font-light max-w-4xl">
      Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
      Ad mauris est parturient varius molestie condimentum eleifend sit.
      Lorem ipsum odor amet, consectetuer adipiscing elit. Felis eleifend nam convallis mus vehicula at.
      Ad
    </p>
    <img src="https://images.pexels.com/photos/8199706/pexels-photo-8199706.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Highlighted Image" class="rounded" style="width: 700px; height: 491px;" />
  </div>

</div>

@endsection