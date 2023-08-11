<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $propuestas = [
                ['categoria_id' => 5,'nombre' => 'Ruth','apellido' => 'Villegas Saavedra','cedula' => '1107102219','direccion' => 'Calle 10 a #17-94','telefono' => '3168963599','email' => 'elmundocreativoa.r@gmail.com','descripcion' => 'Hacemos tus ideas realidad logrando un producto personalizado y exclusivo realizando todo tipo de manualidades y decoraciones para toda ocasión. Si tú lo imaginas, nosotros lo creamos.','foto1' => '1-1.jpg','foto2' => '1-2.jpg','foto3' => '1-3.jpg','pagina' => 'https://www.atom.bio/mundocreativoa_r','facebook' => 'https://www.facebook.com/MundoCreativoA','instagram' => 'https://www.instagram.com/mundocreativoa.r'],
                ['categoria_id' => 9,'nombre' => 'Paula Andrea','apellido' => 'Reyes Méndez','cedula' => '1073511576','direccion' => 'Cr 6#23/70 BL 30 cs 25 solo domicilios','telefono' => '3204601886','email' => 'chikis921106@gmail.com','descripcion' => 'Estación de servicios gastronómicos a domicilio ubicados en el municipio de funza cundinamarca.','foto1' => '2-1.png','foto2' => '2-2.jpg','foto3' => '2-3.jpg','pagina' => 'https://the-sweet-station.ola.click/','facebook' => 'https://www.facebook.com/Paulapostres/','instagram' => 'https://www.instagram.com/Andreita_reyes_m/'],
                ['categoria_id' => 4,'nombre' => 'Omar','apellido' => 'Márquez','cedula' => '1066511136','direccion' => 'Cr20a-9a-57','telefono' => '3103181438','email' => 'bioinsumoselleuse@gmail.com','descripcion' => 'Somos una empresa dedicada a la producción y distribución de insumos agrícolas a base de hongos y bacterias benéficas para promover que la agricultura destinará a la producción alimentaria sea más sana y limpia.','foto1' => '3-1.jpg','foto2' => '3-2.jpg','foto3' => '3-3.jpg','pagina' => '','facebook' => 'https://www.facebook.com/elleuse.bioinsumos','instagram' => 'https://www.instagram.com/elleusebioinsumos/'],
                ['categoria_id' => 6,'nombre' => 'Luis Enrique','apellido' => 'Naranjo Delgado','cedula' => '80383236','direccion' => 'Calle 17 # 12-46 Funza','telefono' => '3174393025','email' => 'lenaranjod@unal.edu.co','descripcion' => 'CompuRedes, servicio técnico de computadores ubicado en Funza, ofrece soluciones rápidas y confiables para resolver problemas de hardware y software. Somos expertos en reparación y mantenimiento, brindamos atención personalizada y eficiente, garantizando el óptimo funcionamiento de tus dispositivos.','foto1' => '4-1.jpg','foto2' => '4-2.jpg','foto3' => '4-3.jpg','pagina' => '','facebook' => 'https://www.facebook.com/search/top?q=thepuppyshower','instagram' => 'https://www.instagram.com/thepuppyshower/'],
                ['categoria_id' => 10,'nombre' => 'Claudia Patricia','apellido' => 'Romero Garzón','cedula' => '52891095','direccion' => 'Calle 15 #4-31 Barrio La Fortuna Funza','telefono' => '3028643528','email' => 'romeroclaudia10@hotmail.com','descripcion' => 'Somos profecionales en estética canina y felina donde amamos y respetamos a los animales. Innovamos informando a nuestros clientes por medio de fotos y videos del proceso de mantenimiento. Además contamos con un ambiente agradable para que los tenedores de mascotas puedan acompañarlos presencialmente.','foto1' => '','foto2' => '','foto3' => '','pagina' => '','facebook' => 'https://www.facebook.com/profile.php?id=100055052036057','instagram' => 'https://www.instagram.com/thepuppyshower/'],
                ['categoria_id' => 10,'nombre' => 'Natalia','apellido' => 'Garzon Betancourt','cedula' => '1073516926','direccion' => 'Cll 9 # 5-56','telefono' => '3125317615','email' => 'mipeludoamigopetshop@gmail.com','descripcion' => 'Comercializacion de alimentos a granel o en bulto y accesorios para mascotas','foto1' => '6-1.jpg','foto2' => '6-2.jpg','foto3' => '6-3.jpg','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/mipeludoamigopetshop_oficial/'],
                ['categoria_id' => 2,'nombre' => 'Alison Dayana','apellido' => 'Guaqueta Zuluaga','cedula' => '1007703395','direccion' => 'Cll23# 2 b bis 04','telefono' => '3102824233','email' => 'adgznana@gmail.com','descripcion' => 'Almas en Movimiento brinda un servicio de acompañamiento psicológico personalizado que pone todo el conocimiento y experiencia profesional en el bienestar personal y social,  somos un espacio de contención y cuidado emocional que mejora la calidad de vida,  creamos en conjunto una psicología para el alma.','foto1' => '7-1.jpg','foto2' => '7-2.jpg','foto3' => '','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/aj_almasenmovimiento/'],
                ['categoria_id' => 1,'nombre' => 'Gilberto Antonio','apellido' => 'Parra García','cedula' => '14961942','direccion' => 'KR 20A N0 09 A 57','telefono' => '3164887929','email' => 'gilberto.gilpar@gmail.com','descripcion' => 'Somos un estudio creativo especializado en diseño gráfico, dibujos animados y multimedia.Con nuestros productos inspirados en la cultura muisca: Cómics, cartillas, juegos de cartas, y el Tur Meké de oro, niños, jóvenes y adultos, conocerán porque Bacatá, hoy Funza, es la capital muisca de Cundinamarca.','foto1' => '8-1.png','foto2' => '8-2.png','foto3' => '8-3.png','pagina' => '','facebook' => 'https://www.facebook.com/yalkonelprecolombino','instagram' => ''],
                ['categoria_id' => 9,'nombre' => 'Angelica Yadira','apellido' => 'Portuguez Niño','cedula' => '53062274','direccion' => 'Calle 17a # 7b - 57','telefono' => '3164144280','email' => 'ayportuguez@gmail.com','descripcion' => 'Producimos y comercializamos productos de alta calidad a base de Sacha Inchi, con nutrientes esenciales que ayudan a llevar un estilo de vida saludable, contienen  (Omega 3,6,9, Vitaminas K- A- E), con gran variedad de presentaciones para el consumo de nuestro clientes.Productos Libres de gluten y conservantes.','foto1' => '9-1.png','foto2' => '9-2.png','foto3' => '9-3.png','pagina' => 'https://sacha-inchi.ola.click/','facebook' => 'https://www.facebook.com/profile.php?id=100094520591936','instagram' => 'https://www.instagram.com/sachapp.co/'],
                //['categoria_id' => 9,'nombre' => 'Dirley Andrea','apellido' => 'Laverde Amaya','cedula' => '52664146','direccion' => 'Cra 2 C No 6 02 Funza','telefono' => '3203233965','email' => 'dirleylaverde@gmail.com','descripcion' => 'Samar es una empresa dedicada a la elaboración y distribución de mantecadas, tortas, y postres bajos en azúcar, con calidad y frescura. Nuestro propósito es brindar confianza a nuestros clientes con un producto tradicional y delicado. Buscamos atraer y sorprender los paladares. Trabajamos bajo pedidos desde la virtualidad.','foto1' => '10-1.jpg','foto2' => '10-2.jpg','foto3' => '10-3.jpg','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/samar_reposteria/'],
                ['categoria_id' => 1,'nombre' => 'Erika','apellido' => 'Umaña Casallas','cedula' => '35525711','direccion' => 'CALLE 10 N° 22-10','telefono' => '3025162424','email' => 'erikauma2014@gmail.com','descripcion' => 'Erika Umaña eventos es una empresa con más de 13 años de experiencia,destacada en el mercado de organización de eventos sociales y corporativos en sabana de occidente, reconociéndonos por brindar soluciones y asesorías integrales a la medida del evento contratado y así generar las mejores experiencias y recuerdos inolvidables','foto1' => '11-1.jpg','foto2' => '11-2.jpg','foto3' => '11-3.jpg','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/erikauma_eventos/'],
                ['categoria_id' => 8,'nombre' => 'Esneda','apellido' => 'Lopez Ramirez','cedula' => '52661403','direccion' => 'calle 23 #6a-07 bellisca-funza','telefono' => '3174359491','email' => 'esneda09@hotmail.com','descripcion' => 'Somos una empresa que fabrica y comercializa prendas deportivas de alta calidad, elaboradas con telas inteligentes con tecnología Green Tex con versatilidad y cumplimiento, cubriendo los requerimientos de nuestros clientes para ganar su lealtad. Esto se hace en un ambiente óptimo de trabajo aportando de esta manera empleo y desarrollo en pro del beneficio mutuo de acuerdo con nuestros principios colaborativos, de conciencia social y ambiental.','foto1' => '','foto2' => '','foto3' => '','pagina' => 'http://maracreaciones.com.co/','facebook' => '','instagram' => 'https://www.instagram.com/mara_.creaciones/'],
                ['categoria_id' => 8,'nombre' => 'Virgilio','apellido' => 'Rativa Camargo','cedula' => '19467453','direccion' => 'Calle 18a # 7a-45','telefono' => '3212192135','email' => 'brillocolor.v@gmail.com','descripcion' => 'Para Lavamuebles&Mas, su objetivo es brindar soluciones a las necesidades de sus clientes en cuanto aseo, desinfección, limpieza y brillo, en muebles, cortinas pisos de mármol, en general, para llevar esto acabo se realizan servicios con maquinaria idónea y productos de alta calidad, ofreciendo garantía por cada uno de los servicios prestados.','foto1' => '13-1.jpg','foto2' => '13-2.png','foto3' => '13-3.png','pagina' => 'https://lavamueblesmas.negocio.site/','facebook' => 'https://www.facebook.com/Lavamuebles21','instagram' => ''],
                //['categoria_id' => 7,'nombre' => 'Cristian David','apellido' => 'Vargas Espinosa','cedula' => '1010246763','direccion' => 'calle 9 No. 10 b - 10','telefono' => '3124761926','email' => 'dasavargaspe@gmail.com','descripcion' => 'Satisfacer las necesidades de limpieza, desinfección, higiene y presentación de las instalaciones de empresas, residencias, propiedad horizontal, parques industriales; sector: gastronómico, bares, educación, institucional, con el fin de generar un ambiente de bienestar a las personas que habitan o circulan por esas áreas. ','foto1' => '14-1.jpg','foto2' => '14-2.jpg','foto3' => '14-3.jpg','pagina' => '','facebook' => '','instagram' => ''],
                ['categoria_id' => 8,'nombre' => 'Flor Angela','apellido' => 'Torres Sanchez','cedula' => '1148959570','direccion' => 'Feria grival de funza','telefono' => '3232210498','email' => 'florgranados022@gmail.com','descripcion' => 'Danisa moda´s somos fabricantes de ropa femenina algunas prendas masculinas tenemos variedad y ventas al detal y al mayor','foto1' => '','foto2' => '','foto3' => '','pagina' => 'https://sites.google.com/view/www-danisamoda-com/p%C3%A1gina-principal','facebook' => '','instagram' => 'https://www.instagram.com/danisamodas/'],
                ['categoria_id' => 5,'nombre' => 'Luz Dary','apellido' => 'Pita Lizarazo','cedula' => '52751529','direccion' => 'N/A','telefono' => '3163242128','email' => 'lupita.cyc@gmail.com','descripcion' => 'Mostaza es una tienda de ropa y accesorios tejidos y bordados a mano.','foto1' => '16-1.jpg','foto2' => '16-2.jpg','foto3' => '16-3.jpg','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/mostaza.mujer/'],
                ['categoria_id' => 5,'nombre' => 'Tania','apellido' => 'Vargas Vivas','cedula' => '28488668','direccion' => 'Calle 9 #11-34 barrio la cita','telefono' => '3203635646','email' => 'tvvnfj@hotmail.com','descripcion' => 'Velas artesanales y aromatizadas, a base de cera de soja','foto1' => '','foto2' => '','foto3' => '','pagina' => '','facebook' => 'https://www.facebook.com/adorartetire','instagram' => 'https://www.instagram.com/adorarte_velas_y_detalles/'],
                ['categoria_id' => 8,'nombre' => 'Érilo','apellido' => 'Cabra Guerrero','cedula' => '1073380875','direccion' => 'Kr 6 #23-70 bloque 42 casa 7 zuame 1','telefono' => '3114662156','email' => 'erilogroup@gmail.com','descripcion' => 'Elaboramos prendas de dotación para grandes,medianas, pequeñas empresas y comercio en general. Ofrecemos calidad, comodidad y cumplimiento.','foto1' => '18-1.jpg','foto2' => '18-2.jpg','foto3' => '18-3.jpg','pagina' => '','facebook' => '','instagram' => ''],
                ['categoria_id' => 7,'nombre' => 'Sonia Constanza','apellido' => 'Laverde Cañon','cedula' => '52852155','direccion' => 'Calle15#3-80 local 3, barrio La Fortuna','telefono' => '3112632878','email' => 'pedidos@crochetteando.com','descripcion' => 'Crochetteando ofrece lanas e insumos para tejidos a mano, así como talleres de tejido personalizados para niños y adultos. Te brindamos asesoria en tus proyectos. Enviamos a todo Colombia.','foto1' => '19-1.jpg','foto2' => '19-2.jpg','foto3' => '19-3.jpg','pagina' => 'https://www.crochetteando.com','facebook' => 'https://www.facebook.com/crochetteando','instagram' => 'https://www.instagram.com/crochetteando/'],
                ['categoria_id' => 5,'nombre' => 'Eliana Patricia','apellido' => 'Baiter Montero','cedula' => '45767423','direccion' => 'Cra 20a# 9a-57 hacienda los caballos','telefono' => '3192210204','email' => 'elipa-28@hotmail.com','descripcion' => 'Nuestro proyecto consiste en ofrecer una amplia gama de productos artesanales inspirados en la cultura wayuu, como mochilas, llaveros, monederos, carteras de mano y sandalias. Nuestro enfoque se basa en la autenticidad, calidad y diseños únicos, conectando con clientes que valoran el trabajo artesanal y buscan productos con historia y significado','foto1' => '20-1.jpg','foto2' => '20-2.jpg','foto3' => '20-3.jpg','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/hilos_artesanias_baiter/'],
                ['categoria_id' => 2,'nombre' => 'Carmen Lorena','apellido' => 'Hernández Wilches','cedula' => '1032461570','direccion' => 'Carrera 14#15-11 Centro Funza','telefono' => '3192551187','email' => 'carmenwilches94@gmail.com','descripcion' => 'Somos Centro de estética y belleza dedicado a mejor el bienestar y salud de nuestros pacientes,  utilizamos equipos de última tecnología, tratamientos y técnicas innovadores, personal profesional altamente calificado y capacitado.','foto1' => '21-1.jpeg','foto2' => '21-2.jpeg','foto3' => '21-3.jpeg','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/lhestetica2022/'],
                ['categoria_id' => 9,'nombre' => 'Mariela','apellido' => 'Bello','cedula' => '35415635','direccion' => 'Carrera 2 # 15-30 Funza Barrio El Hato','telefono' => '3167918305','email' => 'mariela.bello13@gmail.com','descripcion' => 'Producción y venta de alimentos fritos, empanada, pastel de yuca y arepas de huevo con atención directamente en punto de venta','foto1' => '22-1.jpg','foto2' => '22-2.jpg','foto3' => '22-3.jpg','pagina' => '','facebook' => 'https://www.facebook.com/profile.php?id=100080354496961','instagram' => ''],
                ['categoria_id' => 9,'nombre' => 'Sebastian Eduardo','apellido' => 'Mejia Murillo','cedula' => '80656884','direccion' => 'Cra 14 # 11-46, Funza, Cundinamarca','telefono' => '3115104589','email' => 'donsebastian40@gmail.com','descripcion' => 'La cervecería Artesanal Aviador se distingue por su calidad excepcional, innovación constante y compromiso con la sostenibilidad. Nuestros cerveceros expertos crean cervezas únicas, utilizando ingredientes de la más alta calidad y técnicas artesanales. Nos enorgullece ofrecer productos de excelencia que cautivan a los amantes de la cerveza en busca de experiencias auténticas.','foto1' => '23-1.jpg','foto2' => '23-2.jpg','foto3' => '23-3.jpg','pagina' => '','facebook' => 'https://www.facebook.com/profile.php?id=100087329130048','instagram' => 'https://www.instagram.com/cerveceria_aviador/'],
                ['categoria_id' => 9,'nombre' => 'Alejandra','apellido' => 'Heredia Sierra','cedula' => '1073507447','direccion' => 'Laboratorio oculto, Funza','telefono' => '3046822776','email' => 'herediasalejandra@gmail.com','descripcion' => 'Laboratorio de panadería con masa madre y pastelería Arte- Sana, Natural y orgánica','foto1' => '24-1.jpg','foto2' => '24-2.jpg','foto3' => '24-3.jpg','pagina' => '','facebook' => 'https://www.facebook.com/panu.panaderia.1','instagram' => 'https://www.instagram.com/panupanaderia/'],
                ['categoria_id' => 3,'nombre' => 'Sergio','apellido' => 'Sergio Callejas','cedula' => '79486130','direccion' => 'cra 2 b · 13 165 int 4 apto 504','telefono' => '3108584761','email' => 'gerenciatextifast@gmail.com','descripcion' => 'Conectamos su empresa con los clientes objetivos, con base a consultorias de re estructuración comercial y financiera con acompañamiento en trabajo de campo.','foto1' => '25-1.jpg','foto2' => '25-2.jpg','foto3' => '','pagina' => '','facebook' => '','instagram' => ''],
                ['categoria_id' => 9,'nombre' => 'Claudia Marcela','apellido' => 'Salas Beltrán','cedula' => '52910368','direccion' => 'Kra 28 13 20','telefono' => '3057927957','email' => 'marcesalas26@gmail.com','descripcion' => 'Ofrecemos alimentos sin aditivos artificiales a base de frutas y semillas en dos líneas de producción (Untables y repostería) para personas preocupadas por su alimentación y que busquen opciones de snacks saludables-','foto1' => '26-1.jpeg','foto2' => '26-2.jpeg','foto3' => '26-3.jpeg','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/mermeladassweet/'],
                ['categoria_id' => 8,'nombre' => 'Leidy Johanna','apellido' => 'Urbano Cifuentes','cedula' => '52664617','direccion' => ' Calle 9#6-27 provivienda','telefono' => '3216764107','email' => 'gerencia.urbanotex@gmail.com','descripcion' => 'Somos una empresa con 10 años de experiencia en el sector de Funza interesados en la sostenibilidad del medio ambiente dándole vida a esta marca CLICK produciendo camisetas  eco amigables hechas con un porcentaje de  botellas de plástico reciclado. Generando menos residuos e impacto ambiental.','foto1' => '27-1.jpg','foto2' => '27-2.jpg','foto3' => '27-3.jpg','pagina' => '','facebook' => 'https://www.facebook.com/urbanotex','instagram' => 'https://www.instagram.com/urbanotex/'],
                ['categoria_id' => 8,'nombre' => 'Johanna Andrea','apellido' => 'Ramirez Vergara','cedula' => '1073508936','direccion' => '','telefono' => '3102051640','email' => 'johannisjar1@gmail.com','descripcion' => 'Confeccionamos ropa intima femenina que se ajusta a las diferentes necesidades y gustos. Cada prenda realza la feminidad, sensualidad y confianza de la mujer, logrando comodidad para realizar las actividades del día a día.','foto1' => '28-1.png','foto2' => '28-2.png','foto3' => '28-3.png','pagina' => 'https://linktr.ee/femme.libre?utm_source=linktree_profile_share&ltsid=ec55d910-88bf-47b0-b034-53ce4cfe31e8','facebook' => '','instagram' => 'https://www.instagram.com/hannabyjohanna/'],
                ['categoria_id' => 8,'nombre' => 'Alida','apellido' => 'Lopez Perez','cedula' => '41790002','direccion' => 'CARR 6 # 23-70 C 4 B 41','telefono' => '3152729836','email' => 'alidalperez@gmail.com','descripcion' => 'DISEÑO, CORTE Y CONFECCION DE CHAQUETAS Y ACCESORIOS EN PIEL','foto1' => '','foto2' => '','foto3' => '','pagina' => '','facebook' => '','instagram' => ''],
                ['categoria_id' => 8,'nombre' => 'Juan David','apellido' => 'Rozo Susatama','cedula' => '1000049737','direccion' => 'Cra 7b # 14: Centro comercial nueva gerona, local 105','telefono' => '3147678007','email' => 'rozoj1124@gmail.com','descripcion' => 'Empresa especializada en reparación, personalización y confección de prendas de vestir.','foto1' => '30-1.jpg','foto2' => '30-2.jpg','foto3' => '30-3.jpg','pagina' => '','facebook' => 'https://www.facebook.com/profile.php?id=100092539489627','instagram' => 'https://www.instagram.com/eltallerdecostura01/'],
                ['categoria_id' => 2,'nombre' => 'Natalia','apellido' => 'Rodriguez Pardo','cedula' => '1073515408','direccion' => 'Calle 17 # 17b - 10','telefono' => '3195140150','email' => 'bemvelo.natural@gmail.com','descripcion' => 'Diseño, formulación y fabricación de productos para el cuidado personal en su mayoría en estado sólido, evitando el uso de plastico y con una duración de 2 a 3 meses evitando el consumismo. con materias primas naturales, algunas de ellas sembradas y cosechadas en territorio Funzano.','foto1' => '31-1.png','foto2' => '31-2.png','foto3' => '31-3.png','pagina' => '','facebook' => 'https://www.facebook.com/p/Bemvelo-100067026703331/','instagram' => 'https://www.instagram.com/bemvelo.natural/'],
                ['categoria_id' => 6,'nombre' => 'Wigsthon Leonardo','apellido' => 'Osorio Castañeda','cedula' => '79904206','direccion' => 'Calle 13a No 2C-53 Blq 9 CA 18 Funza','telefono' => '3027168611','email' => 'colsolutech@gmail.com','descripcion' => 'Comercializamos las mejores marcas a nivel de tecnologia y sistemas, hardware, software y  servicio tecnico profesional. Ofrecemos renting tecnologico de impresion, computo y sistemas cctv. Contamos con equipos remanufacturados para venta y alquiler ofreciendo precios comodos a presupuestos limitados.','foto1' => '32-1.jpg','foto2' => '','foto3' => '','pagina' => '','facebook' => 'https://www.facebook.com/profile.php?id=100083536970547','instagram' => ''],
                //['categoria_id' => 9,'nombre' => 'Marlon','apellido' => 'Angarita','cedula' => '1073505494','direccion' => 'Calle 24d # 1-90','telefono' => '3005767000','email' => 'zaquecerveceria@gmail.com','descripcion' => 'Elaboración de cervezas artesanales,con adjuntos de la región','foto1' => '33-1.jpg','foto2' => '33-2.jpg','foto3' => '','pagina' => 'http://www.cerveceriazaque.com/','facebook' => 'https://www.facebook.com/cervezazaque','instagram' => 'https://www.instagram.com/cerveceriazaque/'],
                ['categoria_id' => 9,'nombre' => 'Johanna Carolina','apellido' => 'Garcia Mora','cedula' => '1073503489','direccion' => '','telefono' => '3162274101','email' => 'joha.garcia0326@gmail.com','descripcion' => 'Somos una  empresa Procesadora y Distribuidora de Alimentos Congelados, especializándonos en la papa a la francesa, carne de hamburguesa de res artesanal y patacones.','foto1' => '34-1.png','foto2' => '34-2.png','foto3' => '34-3.jpg','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/alimentosvictoryfoods/'],
                ['categoria_id' => 3,'nombre' => 'Carlos Enrique','apellido' => 'Castillo Torres','cedula' => '80072004','direccion' => 'Calle 15 # 15-68','telefono' => '3103095997','email' => 'castell007@gmail.com','descripcion' => 'Garantizar el funcionamiento de las bicicletas de la comunidad, brindando servicios de mantenimiento, reparación y alistamiento de bicicletas. A través conocimiento, tecnología y mano de obra de alta calidad. Adicional ofrecemos Bicicletas, repuestos, elementos de Seguridad, ropa y accesorios para el suso de la bicicleta.','foto1' => '35-1.jpeg','foto2' => '35-2.jpeg','foto3' => '35-3.png','pagina' => '','facebook' => 'https://www.facebook.com/bike.primates.7','instagram' => 'https://www.instagram.com/primateracingbike/'],
                ['categoria_id' => 9,'nombre' => 'Darín Eliana','apellido' => 'Beltrán Riaño','cedula' => '1073516902','direccion' => 'Calle 12# 25-04 siete trojes Funza','telefono' => '3222186541','email' => 'darineliana@gmail.com','descripcion' => 'Pragma sazón es un restaurante que ofrece a sus comensales una experiencia desde que ingresan al establecimiento hasta su salida, cuenta con un servicio acogedor y agradable que gira en torno a las necesidades y deseos de nuestros clientes, además, posee una gran diversidad de platos con tecnicas de asado a la parrilla y al wok con influencia mexicana, Argentina, peruana, italiana y por supuesto colombiana instaurando así, el equilibrio del sabor, la técnica y los sentidos, resaltando la calidad y la inocuidad de las materias primas y su manipulación. Cabe resaltar que nuestros clientes estarán rodeados de un ambiente semi-campestre, ideal para crear gratos momentos con amigos y familia.','foto1' => '36-1.jpg','foto2' => '36-2.jpg','foto3' => '','pagina' => 'https://pragmasazon.my.canva.site/','facebook' => 'https://www.facebook.com/profile.php?id=100092665581740','instagram' => 'https://www.instagram.com/pragma_sazon/'],
                //['categoria_id' => 9,'nombre' => 'Orlando Marin','apellido' => 'Camelo Cardenas','cedula' => '79306162','direccion' => '','telefono' => '3134001108','email' => 'orlandocamelo63@gmail.com','descripcion' => 'Creacion de panes y tortas ancestrales organicos sin conservantes','foto1' => '37-1.jpg','foto2' => '37-2.jpg','foto3' => '37-3.jpg','pagina' => '','facebook' => '','instagram' => 'https://www.instagram.com/camelos_pan_ancestral/'],
            ];
            foreach ($propuestas as $item) {
                DB::table('propuestas')->insert([
                    'categoria_id' => $item['categoria_id'],
                    'nombre' => $item['nombre'],
                    'apellido' => $item['apellido'],
                    'cedula' => $item['cedula'],
                    'direccion' => $item['direccion'],
                    'telefono' => $item['telefono'],
                    'email' => $item['email'],
                    'descripcion' => $item['descripcion'],
                    'foto1' => $item['foto1'],
                    'foto2' => $item['foto2'],
                    'foto3' => $item['foto3'],
                    'pagina' => $item['pagina'],
                    'facebook' => $item['facebook'],
                    'instagram' => $item['instagram'],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            }
    }
}
