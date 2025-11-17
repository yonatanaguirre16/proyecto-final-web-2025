module.exports = {
  proxy: "127.0.0.1:81", // Servidor de XAMPP en puerto 81
  startPath: "/proyecto-final-web/public", // Ruta del proyecto
  files: [
    "./public/*.css", // CSS finales dentro de public
    "./public/js/*.js", // JS finales dentro de public
    "./public/*.php",

    "./src/**/*.php", // todos los PHP del proyecto
    "./src/**/*.css", // archivos fuente que tú editas
    "./src/**/*.js",
  ],

  ignore: [
    "./public/output.css", // evita vigilar el build final si usas Tailwind
  ],
  reloadDelay: 300,
  notify: false,
  open: true,
};
