package com.Examen.PortaDeVenta.Controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;

import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.Examen.PortaDeVenta.Entity.Producto;
import com.Examen.PortaDeVenta.Service.ProductoIMPL.PSIMPL;




import org.springframework.web.bind.annotation.CrossOrigin;

@CrossOrigin(origins = "http://localhost")

@RestController
@RequestMapping("/CRUDRepo")
public class Controlador {
@Autowired 
	private PSIMPL impl;

//@GetMapping
@GetMapping("/ConsultarProductos")
public ResponseEntity<?> ConsultarProductos(){

List<Producto>listaProducto=this.impl.ConsultarPersona();
return ResponseEntity.ok(listaProducto);
 
}

//@PostMapping
@PostMapping(value="CrearProductos",consumes="application/json")
public ResponseEntity<?> CrearProductos(@RequestBody Producto producto){
 
Producto ProductoCreado=this.impl.CrearProducto(producto);

return ResponseEntity.status(HttpStatus.CREATED).body(ProductoCreado);
//return ResponseEntity.ok("Producto Creado");
	
	
//return ResponseEntity.status(HttpStatus.CREATED).body(ProductoCreado);
 
}


//@PutMapping
@PutMapping(value="ModificarProducos",consumes="application/json")
public ResponseEntity<?> ModificarProductos(@RequestBody Producto producto){
 
	Producto ProductoModificado=this.impl.ModificarProducto(producto);

return ResponseEntity.status(HttpStatus.CREATED).body(ProductoModificado);
 
}

//@GetMapping
@GetMapping("BuscarProducos/{id}")
public ResponseEntity<?> BuscarProductos(@PathVariable int id){
 
	Producto producto=this.impl.BuscarProducto(id);

return ResponseEntity.ok(producto);
 
}


//@DeleteMapping
@DeleteMapping("EliminarProducos/{id}")
public ResponseEntity<?> EliminarProductos(@PathVariable int id){
 
	this.impl.EliminarProducto(id);
	//return ResponseEntity.ok("Producto Eliminado");
return ResponseEntity.ok().build();
 
}





}
