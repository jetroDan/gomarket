
<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $categorias=new App\Models\Categoria();  //1
        $categorias->nombre = "Despensa";
        $categorias->slug = "despensa";
        $categorias->imagen = "/assets/images/despensa2.png";
        $categorias->save();
        
        $categorias=new App\Models\Categoria();   //2
        $categorias->nombre = "Frutas y verduras";
        $categorias->slug = "frutas-y-verduras";
        $categorias->imagen = "/assets/images/frutas_verduras4.jpg";
        $categorias->save();
        
        $categorias=new App\Models\Categoria();  //3
        $categorias->nombre = "Carnes frías";
        $categorias->slug = "carnes-frias";
        $categorias->imagen = "/assets/images/jamones2.jpg";
        $categorias->save();
        
        $categorias=new App\Models\Categoria(); //4
        $categorias->nombre = "Jugos y bebidas";
        $categorias->slug = "jugos-bebidas";
        $categorias->imagen = "/assets/images/jugos2.jpg";
        $categorias->save();
        
        $categorias=new App\Models\Categoria();  //5
        $categorias->nombre = "Lácteos";
        $categorias->slug = "lacteos";
        $categorias->imagen = "/assets/images/leche2.jpg";
        $categorias->save();
        
        $categorias=new App\Models\Categoria();  //6
        $categorias->nombre = "Panadería y tortillería";
        $categorias->slug = "panaderia-tortilleria";
        $categorias->imagen = "/assets/images/c.jpg";
        $categorias->save();
        
        
        $articulo = new App\Models\Articulo(); //1
        $articulo->SKU = "GALLPOLV0250";
        $articulo->nombre = "Galletas Polvorones";
        $articulo->marca = "Marinela";
        $articulo->imagen = "/assets/images/polvorones.jpg";
        $articulo->descripcion = "Polvorones Marinela sabor naranja 250 g. Adicionadas con vitaminas y minerales.";
        $articulo->precioVenta = 16.00;
        $articulo->precioReal = 13.00;
        $articulo->prestacion = "250 gr";
        $articulo->ubicacion = "A1";
        $articulo->tipoUnidad = "Paquete";
        $articulo->precioUnidad = 10.0;
        $articulo->departamento = "Panadería y tortillería";
        $articulo->unidadMax = 5;
        $articulo->unidadInvent = 10;
        $articulo->piezasCotizacion = 10;
        $articulo->precioCotizacion = 10;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //2
        $articulo->SKU = "ATUNDOLO0123";
        $articulo->nombre = "Atun";
        $articulo->marca = "Dolores";
        $articulo->imagen = "/assets/images/ATUN2.jpg";
        $articulo->descripcion = "Atun de Agua";
        $articulo->precioVenta = 13.0;
        $articulo->precioReal = 7.0;
        $articulo->prestacion = "200g";
        $articulo->ubicacion = "A2";
        $articulo->tipoUnidad = "Pieza";
        $articulo->precioUnidad = 10.0;
        $articulo->departamento = "Despensa";
        $articulo->unidadMax = 5;
        $articulo->unidadInvent = 10;
        $articulo->piezasCotizacion = 10;
        $articulo->precioCotizacion = 4;
        $articulo->impuestos = 2;
        $articulo->save();


        $articulo = new App\Models\Articulo(); //3
        $articulo->SKU = "AzuZul142";
        $articulo->nombre = "Azucar";
        $articulo->marca = "Zulka";
        $articulo->imagen = "/assets/images/azucar1.jpg";
        $articulo->descripcion = "Azúcar morena de 2 kg";
        $articulo->precioVenta = 17.0;
        $articulo->precioReal = 15.0;
        $articulo->prestacion = "2 kg";
        $articulo->ubicacion = "A3";
        $articulo->tipoUnidad = "Paquete";
        $articulo->precioUnidad = 20.0;
        $articulo->departamento = "Despensa";
        $articulo->unidadMax = 5;
        $articulo->unidadInvent = 10;
        $articulo->piezasCotizacion = 10;
        $articulo->precioCotizacion = 13;
        $articulo->impuestos = 2;
        $articulo->save();

        $articulo = new App\Models\Articulo(); //4
        $articulo->SKU = "CERVHEIN0190";
        $articulo->nombre = "Cerveza Heineken";
        $articulo->marca = "Heineken";
        $articulo->imagen = "/assets/images/cerveza.jpg";
        $articulo->descripcion = "Cerveza clara de lata Heineken";
        $articulo->precioVenta = 19;
        $articulo->precioReal = 13;
        $articulo->prestacion = "";
        $articulo->ubicacion = "";
        $articulo->tipoUnidad = "";
        $articulo->precioUnidad = 16;
        $articulo->departamento = "Jugos y bebidas";
        $articulo->unidadMax = "10";
        $articulo->unidadInvent = "10";
        $articulo->piezasCotizacion = "10";
        $articulo->precioCotizacion = 13;
        $articulo->impuestos = "2";
        $articulo->save();

        $articulo = new App\Models\Articulo();//5
        $articulo->SKU = "TorRos234";
        $articulo->nombre = "Tortillas de harina";
        $articulo->marca = "Tia Rosa";
        $articulo->imagen = "/assets/images/tortillinas.jpg";
        $articulo->descripcion = "Tortillas de harina de 12 piezas";
        $articulo->precioVenta = 18;
        $articulo->precioReal = 13;
        $articulo->prestacion = "12 piezas";
        $articulo->ubicacion = "A5";
        $articulo->tipoUnidad = "por pieza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "panaderia y tortilleria";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 10;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 13;
        $articulo->impuestos = 2;
        $articulo->save();
        
      $articulo = new App\Models\Articulo(); //6
        $articulo->SKU = "JUGOPIÑA1000";
        $articulo->nombre = "Jugo Jumex piña 1 l";
        $articulo->marca = "Jumex";
        $articulo->imagen = "/assets/images/jumex.jpg";
        $articulo->descripcion = "comparte momentos llenos de frescura y sabor con el jugo de piña que Jumex tiene para ti. Su presentación de 1 litro es ideal para compartir con los amigos o con tu familia. Su sabor intenso y dulce les encantará a todos. Podrás mantenerlo en el refrigerador para una mayor frescura.";
        $articulo->precioVenta = 18;
        $articulo->precioReal = 15;
        $articulo->prestacion = "1 lt";
        $articulo->ubicacion = "A4";
        $articulo->tipoUnidad = "Pza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Jugos y bebidas";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 12;
        $articulo->impuestos = 2;
        $articulo->save();

        $articulo = new App\Models\Articulo(); //7
        $articulo->SKU = "COCACOLA3000";
        $articulo->nombre = "Refresco Coca Cola botella de 3 l";
        $articulo->marca = "Coca-Cola";
        $articulo->imagen = "/assets/images/cocacola1.jpg";
        $articulo->descripcion = "Coca-Cola es el refresco de cola de mayor éxito por su delicioso sabor refrescante y es un buen compañero para la comida o cualquier momento.";
        $articulo->precioVenta = 37.5;
        $articulo->precioReal = 34.6;
        $articulo->prestacion = "12 piezas";
        $articulo->ubicacion = "A5";
        $articulo->tipoUnidad = "Pza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Jugos y bebidas";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = "20";
        $articulo->precioCotizacion = 31.5;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //8
        $articulo->SKU = "DONABIMB3000";
        $articulo->nombre = "Donas Bimbo 105 g";
        $articulo->marca = "Bimbo";
        $articulo->imagen = "/assets/images/DONA.jpg";
        $articulo->descripcion = "Donas Bimbo 105 g.";
        $articulo->precioVenta = 11.9;
        $articulo->precioReal = 9;
        $articulo->prestacion = "4 pzs";
        $articulo->ubicacion = "A6";
        $articulo->tipoUnidad = "Paquete";
        $articulo->precioUnidad = 7;
        $articulo->departamento = "Panaderia y tortilleria";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 31.5;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //9
        $articulo->SKU = "COCACOLA3000";
        $articulo->nombre = "Arroz Morelos Verde Valle 900 g";
        $articulo->marca = "Verde Valle";
        $articulo->imagen = "/assets/images/arroz.jpg";
        $articulo->descripcion = "Arroz Morelos Verde Valle 900 g";
        $articulo->precioVenta = 22.5;
        $articulo->precioReal = 20.5;
        $articulo->prestacion = "Paquete";
        $articulo->ubicacion = "A1";
        $articulo->tipoUnidad = "Pza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Despensa";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 18.5;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //10
        $articulo->SKU = "JAMONKIR0250";
        $articulo->nombre = "Jamón de pavo Kir virginia 250 g";
        $articulo->marca = "KIR";
        $articulo->imagen = "/assets/images/jamon.jpg";
        $articulo->descripcion = "Jamón de pavo virginia Kir 250 g. 12% proteína libre de grasa. Empaque resellable.";
        $articulo->precioVenta = 33;
        $articulo->precioReal = 30;
        $articulo->prestacion = "paquete";
        $articulo->ubicacion = "A3";
        $articulo->tipoUnidad = "Pza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Carnes frias";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = "20";
        $articulo->precioCotizacion = 27;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //11
        $articulo->SKU = "SALCFUD0500";
        $articulo->nombre = "Salchicha de pavo Fud 500 g";
        $articulo->marca = "Fud";
        $articulo->imagen = "/assets/images/SALCHICHA.jpg";
        $articulo->descripcion = "Lleva a casa las Salchichas de Pavo Fud en su presentación de 500 gramos.";
        $articulo->precioVenta = 33;
        $articulo->precioReal = 30;
        $articulo->prestacion = "500 GR";
        $articulo->ubicacion = "A1";
        $articulo->tipoUnidad = "paquete";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Carnes frias";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 27;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //12
        $articulo->SKU = "TOCIKIR0250";
        $articulo->nombre = "Tocino Kir ahumado rebanado 250 g";
        $articulo->marca = "Kir";
        $articulo->imagen = "/assets/images/TOCINO.jpg";
        $articulo->descripcion = "Si vas a preparar unas hamburguesas no puedes olvidar complementar su sabor con el delicioso tocino que la marca Kir te ofrece, pues está previamente rebanado para que sólo lo pongas a freír y le des el término crocante a tus mejores recetas..";
        $articulo->precioVenta = 59;
        $articulo->precioReal = 56;
        $articulo->prestacion = "12 piezas";
        $articulo->ubicacion = "A5";
        $articulo->tipoUnidad = "Paquete";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Carnes frias";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 53;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //13
        $articulo->SKU = "JITOROJO1000";
        $articulo->nombre = "Jitomate saladet por kilo";
        $articulo->marca = "Varios";
        $articulo->imagen = "/assets/images/JITOMATE.jpg";
        $articulo->descripcion = "Un ingrediente esencial que no debe faltar en tus recetas de cocina mexicana es el jitomate, con el cual podrás realizar un sinfín de platillos de cocina, también podrás incluirlo en ensaladas o disfrutar en recetas típicas como sopas y caldos";
        $articulo->precioVenta = 24.90;
        $articulo->precioReal = 21.90;
        $articulo->prestacion = "kilogramo";
        $articulo->ubicacion = "A2";
        $articulo->tipoUnidad = "Pza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Frutas y verduras";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 18;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //14
        $articulo->SKU = "MANZAUT1000";
        $articulo->nombre = "Manzana autumn glory por kg";
        $articulo->marca = "autumn";
        $articulo->imagen = "/assets/images/MAN.jpg";
        $articulo->descripcion = "Coca-Cola es el refresco de cola de mayor éxito por su delicioso sabor refrescante y es un buen compañero para la comida o cualquier momento.";
        $articulo->precioVenta = 59;
        $articulo->precioReal = 56;
        $articulo->prestacion = "paquete";
        $articulo->ubicacion = "A2";
        $articulo->tipoUnidad = "KG";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Frutas y verduras";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 54;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //15
        $articulo->SKU = "PLATAMAR1000";
        $articulo->nombre = "Plátano Chiapas por kg";
        $articulo->marca = "Varios";
        $articulo->imagen = "/assets/images/platano.jpg";
        $articulo->descripcion = "Entre las bondades de las frutas y verduras destacan los beneficios del plátano Chiapas o también conocido como Tabasco por su contenido de potasio; ya que es esencial para evitar calambres, regular la carga eléctrica del corazón y descomponer carbohidratos. Los alimentos con potasio están disponibles todo el año.";
        $articulo->precioVenta = 18;
        $articulo->precioReal = 15;
        $articulo->prestacion = "12 piezas";
        $articulo->ubicacion = "A2";
        $articulo->tipoUnidad = "Pza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Frutas y verduras";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = "10";
        $articulo->precioCotizacion = 13;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //16
        $articulo->SKU = "QUESAMAR0144";
        $articulo->nombre = "Queso amarillo Lala americano 8 rebanadas 144 g";
        $articulo->marca = "Lala";
        $articulo->imagen = "/assets/images/QUESOAMA.jpg";
        $articulo->descripcion = "Disfruta de tus platillos favoritos y ponles el Queso Americano Lala®, está elaborado con leche Lala®, lo que le brinda un sabor y textura exquisitos para tu paladar.";
        $articulo->precioVenta = 25;
        $articulo->precioReal = 22;
        $articulo->prestacion = "12 piezas";
        $articulo->ubicacion = "A5";
        $articulo->tipoUnidad = "Pza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Lacteos";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 19;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //17
        $articulo->SKU = "CREMACID0450";
        $articulo->nombre = "Crema Lala ácida 450 ml";
        $articulo->marca = "Lala";
        $articulo->imagen = "/assets/images/CREMA.jpg";
        $articulo->descripcion = "Consiente a tu familia con el delicioso sabor de Crema Lala®, que está hecha con leche de vaca, además tiene la consistencia ideal para acompañar tus alimentos, ya sean dulces o salados y es un gran aliado para elaborar deliciosos platillos.";
        $articulo->precioVenta = 30.5;
        $articulo->precioReal = 27.5;
        $articulo->prestacion = "12 piezas";
        $articulo->ubicacion = "A5";
        $articulo->tipoUnidad = "Pza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Lacteos";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 24.5;
        $articulo->impuestos = 2;
        $articulo->save();
        
        $articulo = new App\Models\Articulo(); //18
        $articulo->SKU = "NUTRLECH1000";
        $articulo->nombre = "Producto lácteo Nutri Leche 1 l";
        $articulo->marca = "Nutri Leche";
        $articulo->imagen = "/assets/images/LECHE3.jpg";
        $articulo->descripcion = "NutriLeche® con su delicioso sabor contribuye a la nutrición de tus hijos lo cual es muy importante si consideramos que una buena nutrición les ayuda a lograr más cada día";
        $articulo->precioVenta = 16;
        $articulo->precioReal = 13;
        $articulo->prestacion = "PZA";
        $articulo->ubicacion = "A5";
        $articulo->tipoUnidad = "Pza";
        $articulo->precioUnidad = 15;
        $articulo->departamento = "Lacteos";
        $articulo->unidadMax = 10;
        $articulo->unidadInvent = 8;
        $articulo->piezasCotizacion = 20;
        $articulo->precioCotizacion = 11;
        $articulo->impuestos = 2;
        $articulo->save();
    
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 1;   
        $articuloscategorias->idCategoria = 6;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 2;   
        $articuloscategorias->idCategoria = 1;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 3;   
        $articuloscategorias->idCategoria = 1;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 4;   
        $articuloscategorias->idCategoria = 4;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 5;   
        $articuloscategorias->idCategoria = 6;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 6;   
        $articuloscategorias->idCategoria = 4 ;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 7;   
        $articuloscategorias->idCategoria = 4;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 8;   
        $articuloscategorias->idCategoria = 6;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 9;   
        $articuloscategorias->idCategoria = 1;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 10;   
        $articuloscategorias->idCategoria = 3;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 11;   
        $articuloscategorias->idCategoria = 3;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 12;   
        $articuloscategorias->idCategoria = 3;
        $articuloscategorias->save();
        
         $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 13;   
        $articuloscategorias->idCategoria = 2;
        $articuloscategorias->save();
        
         $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 14;   
        $articuloscategorias->idCategoria = 2;
        $articuloscategorias->save();
        
         $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 15;   
        $articuloscategorias->idCategoria = 2;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 16;   
        $articuloscategorias->idCategoria = 5;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 17;   
        $articuloscategorias->idCategoria = 5;
        $articuloscategorias->save();
        
        $articuloscategorias = new App\Models\ArticuloCategoria();
        $articuloscategorias->idArticulo = 18;   
        $articuloscategorias->idCategoria = 5;
        $articuloscategorias->save();
        
        
    }
}
