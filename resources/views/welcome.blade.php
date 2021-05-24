@extends('layouts.templatebase')



@section('content')


<livewire:job-list>

<!--Hero-->
<div class="pt-0">
      <div class="container flex flex-col flex-wrap items-center px-3 mx-auto mb-8 md:flex-row">
        <!--Left Col-->
        <div class="flex flex-col items-start justify-center w-full min-h-screen text-center md:w-2/5 md:text-left ml-6">
          <p class="w-full uppercase tracking-loose">Sobre nosotros</p>
          <h1 class="my-4 text-5xl font-bold leading-tight">
          <!-- cambiar por el nombre de la empresa -->
            Coders 
          </h1>
          <p class="mb-8 text-2xl leading-normal">
           Somos una empresa colombiana que buscan conectar a los programadores de software con las empresas lideres del sector
          </p>
          <a href="">
            <button class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow-lg lg:mx-0 hover:no-underline focus:outline-none focus:shadow-outline hover:scale-105">
              Ver más
            </button>
          </a>
        </div>
        <!--Right Col-->
        <div class="w-full py-16 m-auto text-center bg-white shadow-lg md:w-3/6 rounded-3xl ">
          <img class="object-cover w-full h-full" src="https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
          
        </div>
      </div>
    </div>
    

    
    <section class="py-8 my-8 bg-white border-b rounded-2xl">
      <div class="container max-w-5xl m-8 mx-auto">
        <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800 ">
          ¿Buscas empleo?
        </h1>
        <div class="w-full mb-4">
          <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
        </div>
        <div class="flex flex-wrap text-center">
        <div class="w-full p-6 sm:w-1/2">
            <!--ventajas para empresas-->
            <h3 class="mb-3 text-2xl font-bold leading-none text-gray-800">
              encuentra tu oportunidad
            </h3>
            <!--una imagen de beneficios-->
            <img class="shadow-lg rounded-3xl" src="https://images.pexels.com/photos/374016/pexels-photo-374016.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            <p class="mb-8 text-gray-600">
              <br />
              <br />
              Si eres un desarrollador entusiasta y crees tener todas las habilidades necesarias, registrate y aplica 
              <br />
              <br />
            </p>
            <a href="{{url('register')}}">
              <button class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                  Has parte de nosotros
              </button>
            </a>
            
          </div>
          <div class="w-full p-6 sm:w-1/2">
            <!--ventajas para empresas-->
            <h3 class="mb-3 text-2xl font-bold leading-none text-gray-800">
              Contratar talento
            </h3>
            <!--una imagen de beneficios-->
            <img class="shadow-lg rounded-3xl" src="https://images.pexels.com/photos/3760069/pexels-photo-3760069.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            <p class="mb-8 text-gray-600">
              <br />
              <br />
             Si eres una compañia de marca mundial y requieres talento , registrate con nosotros para tener al mejor equipo de TI.
              <br />
              <br />
            </p>
            <a href="{{url('register')}}">
              <button class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                  Inicia a contratar
              </button>
            </a>
          </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-8 bg-white border-none">
      <div class="container flex flex-wrap pt-4 pb-12 mx-auto">
        <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
          Testimonios
        </h1>
        <div class="w-full mb-4">
          <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
        </div>
        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
          <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                Desarrollador Frontend
              </p>
              <div class="w-full px-6 text-xl font-bold text-gray-800">
                Kevin Dorado
              </div>
              <img class="w-2/4 mx-auto my-8 rounded-full shadow-lg" src="https://media-exp1.licdn.com/dms/image/C4E03AQHNAqLlEx9evA/profile-displayphoto-shrink_800_800/0/1612294688099?e=1626912000&v=beta&t=YXCiDZ1iN81HF9-QW8S3tUXEXMYeTvbcpqssZ_AM3hY" alt="Juliana fajardo">
              <br />
              <br />
              <p class="px-6 mx-auto my-5 text-center text-gray-800">
                Esta plataforma me ayudo a acercarme a las posibilidades de empleo que estaba buscando  ,agilizando el proceso de selección
              </p>
            </a>
          </div> 
        </div >
        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
          <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
            <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                Desarrollador FullStack
              </p>
              <div class="w-full px-6 text-xl font-bold text-gray-800">
                Maria Fajardo
              </div>
              <img class="w-2/4 mx-auto my-8 rounded-full shadow-lg" src="https://scontent.fbog15-1.fna.fbcdn.net/v/t1.6435-9/125563107_1288144128249985_2050419118621764369_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=174925&_nc_eui2=AeEwvFhX5wz_DUfsw522Lr1LawF7hhIJaLNrAXuGEglos2LVzdV2lIMlPegKnkvmGEacxyuCCPqhDCFoz92ExAzp&_nc_ohc=Irhxygevd6EAX_sq2V_&_nc_ht=scontent.fbog15-1.fna&oh=25f7c1fc0d76fd86e9588ff54d3da997&oe=60C21281" alt="Juliana fajardo">
              <br />
              <br />
              <p class="px-6 mx-auto my-5 text-center text-gray-800">
                Despues de aplicar en multiples plataformas de empleo workdev me brindo una forma facil y agil de aplicar a las vacantes que se ajustaban a mi perfil profesional.
              </p>
            </a>
          </div>
          
        </div>
        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
          <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                Desarrolladora de software
              </p>
              <div class="w-full px-6 text-xl font-bold text-gray-800">
                Paola roa
              </div>
              <img class="w-2/4 mx-auto my-8 rounded-full shadow-lg" src="https://media-exp1.licdn.com/dms/image/C4E03AQEg2-Fs4-3o3Q/profile-displayphoto-shrink_800_800/0/1604375333655?e=1626912000&v=beta&t=bYcLc34bH8fKV7fmpOxVz2p7moJJoeJ4xcgJ7jEl_dU" alt="Juliana fajardo">
              <br />
              <br />
              <p class="px-6 mx-auto my-5 text-center text-gray-800">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
              </p>
            </a>
          </div>
          
        </div>
      </div>
    </section>


     
    {{-- Empresas --}}
    <section>
      <div class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800 ">
        <h1>
          Empresas que confían en nosotros
        </h1>
        <p class="py-2 my-4">
            Tu próximo empleo podría estar aca.
        </p>
        <img  class="hero container max-w-screen-lg mx-auto pb-10 flex rounded-2xl" src="https://i.ibb.co/K2bkFWK/ejemplo.png" alt="">
      </div>
    </section>
    <!-- Contacto -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#fff">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <section class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Contacto</h2>
        <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
        <p class="mt-3 text-center text-gray-600 dark:text-gray-400">Para cualquier tipo de solicitud, queja o reclamo escribenos</p>
        
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 md:grid-cols-3">
            <!-- agregar un link a google maps o quitar el href -->
            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-blue-500">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>

                <span class="mt-2">121 Bogota D.C, Colombia</span>
            </a>
            <!-- agregar un link a whatsapp o quitar el href -->   
            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-blue-500">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg>

                <span class="mt-2">+2499999666600</span>
            </a>

            <!-- agregar un link al correo o quitar el href --> 
            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-blue-500">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>

                <span class="mt-2">ejemplo@ejemplo.com</span>
            </a>
        </div>
        
        <div class="mt-6 ">
            <div class="items-center -mx-2 md:flex">
                <div class="w-full mx-2">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Nombre</label>

                    <input class="block w-full mt-1 border-blue-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" placeholder="Eje. Paola">
                </div>

                <div class="w-full mx-2 mt-4 md:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">E-mail</label>

                    <input class="block w-full mt-1 border-blue-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" placeholder="Eje. Paola@gmail.com">
                </div>
            </div>

            <div class="w-full mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Mensaje</label>

                <textarea class="block w-full mt-1 border-blue-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Ingresa tú mensaje"></textarea>
            </div>

            <div class="flex justify-center mt-6">
                <button class="px-4 py-2 text-white transition-colors duration-200 transform bg-blue-300 rounded-md hover:bg-yellow-500 focus:outline-none focus:bg-gray-600">enviar</button>
            </div>
        </div>
    </section>

@endsection