<?php 
include '../src/views/layouts/header.php';
?>

  <body class="bg-[#833ab4] min-h-screen flex items-center flex-col">

    <div class="flex flex-col items-center w-full max-w-2xl space-y-6">
      <div class="bg-white rounded-2xl w-full p-4 shadow-md mt-5">
        <input
          type="text"
          placeholder="¡Hoy fue un buen día!"
          class="input input-bordered w-full mb-3 focus:outline-none bg-gray-200"
        />
        <div class="flex items-center gap-2">
          <input
            type="text"
            placeholder="Comparte algo nuevo"
            class="input flex-grow bg-white font-bold"
          />
          <button class="btn bg-[#7b2cbf] text-white hover:bg-[#5a189a] ">
            Publicar
          </button>
        </div>
      </div>

      <div class="bg-[#9f5de2] w-full rounded-2xl p-4 text-white shadow-md">
        <div class="flex items-center gap-3">
          <img
            src="https://i.pravatar.cc/60?img=8"
            alt="Usuario"
            class="w-12 h-12 rounded-full border-2 border-white"
          />
          <div>
            <h2 class="font-bold text-lg leading-tight">Yonatan Aguirre • DASC</h2>
          </div>
        </div>
        <div class="bg-white text-gray-800 rounded-xl p-3 mt-3">
          <p>
            Creo que faltaré a clases hoy... No me siento para nada bien. Alguien mas tiene covid ¿? 
          </p>
        </div>
        <div class="flex gap-3 mt-3">
          <button class="btn btn-sm bg-green-500 text-white hover:bg-green-600">
            👍
          </button>
          <button class="btn btn-sm bg-blue-500 text-white hover:bg-blue-600">
            👎
          </button>
        </div>
      </div>
      <div class="bg-[#9f5de2] w-full rounded-2xl p-4 text-white shadow-md">
        <div class="flex items-center gap-3">
          <img
            src="https://i.pravatar.cc/60?img=3"
            alt="Usuario"
            class="w-12 h-12 rounded-full border-2 border-white"
          />
          <div>
            <h2 class="font-bold text-lg leading-tight">Sergio Olachea • DASC</h2>
          </div>
        </div>
        <div class="mt-3 rounded-xl overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
            alt="Imagen de publicación"
            class="w-full h-64 object-cover"
          />
        </div>
        <div class="bg-white text-gray-800 rounded-xl p-3 mt-3">
          <p>
            Hoy fue una tarde muy agradable con mis compañeros, fuimos a tomar café y aprovechamos para hacer la tarea de Cálculo.
          </p>
        </div>
        <div class="flex gap-3 mt-3">
          <button class="btn btn-sm bg-green-500 text-white hover:bg-green-600">
            👍
          </button>
          <button class="btn btn-sm bg-blue-500 text-white hover:bg-blue-600">
            👎
          </button>
        </div>
      </div>


      



  </body>   

<?php include '../src/views/layouts/footer.php'; ?>
