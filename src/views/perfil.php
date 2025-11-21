<?php
include __DIR__ . "/layouts/header.php";
$carreras = getCareers();

?>
  <body class="bg-[#833ab4] min-h-screen flex items-center flex-col">

  <main class="flex justify-center items-center flex-grow">
      <div class="card bg-white shadow-xl rounded-2xl max-w-sm w-full mx-4">
        <div class="card-body items-center text-center">
          <div class="avatar mb-4">
            <div class="w-24 rounded-full ring ring-[#833ab4]">
              <img src="https://i.pravatar.cc/120?img=8" alt="Foto de perfil" />
            </div>
          </div>

          <h2 class="text-2xl font-semibold text-[#833ab4]">Yonatan Aguirre</h2>
          <p class="text-gray-500 mb-4">
            DASC • Ing. En Desarrollo de Software
          </p>

          <div
            class="w-full rounded-xl p-4 text-left mb-4 bg-[#833ab4] text-white"
          >
            <h3 class="font-semibold mb-2">Información Personal</h3>
            <p><strong>Correo:</strong> yonatan.aguirre@dasc.mx</p>
            <p><strong>Teléfono:</strong> +52 612 14 07489</p>
            <p><strong>Ubicación:</strong> La Paz, BCS</p>
          </div>

          <div class="card-actions justify-center gap-2">
            <button
              class="btn btn-primary bg-[#833ab4] border-none hover:bg-[#6d2fa1] text-white"
            >
              Editar Perfil
            </button>
            <button class="btn bg-gray-200 hover:bg-gray-300 text-[#833ab4]">
              Ver Publicaciones
            </button>
          </div>
        </div>
      </div>
    </main>

     <section class="bg-gray-100 py-16">
      <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-3xl font-bold text-center mb-12 text-blue-800">
        Nuestras Carreras
        </h1>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <?php foreach($carreras as $carrera) : ?>
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
          <img src="<?=ASSETS_PATH?>/img/<?=$carrera['imagen']?>" alt="<?=$carrera['nombre']?>" class="w-full h-64 object-cover">
          <div class="p-6">
          <h3 class="text-xl font-semibold mb-2"><?=$carrera['nombre']?></h3>
          <p class="text-gray-600 text-sm text-justify text-justify">
              <?= $carrera['descripcion'] ?>
          </p>
          <div class="flex justify-center mt-4">
              <a href="<?=SRC_PATH?>/views/careers/careers.details.php?careerId=<?=$carrera['id']?>" 
                class="bg-blue-700 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition">
                Ver más
              </a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </section>
</body>

<?php 
include __DIR__ .'/layouts/footer.php'; 
?>
