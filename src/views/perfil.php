<?php 
include '/src/views/layouts/header.php';
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
</body>

<?php include '/src/views/layouts/footer.php'; ?>
