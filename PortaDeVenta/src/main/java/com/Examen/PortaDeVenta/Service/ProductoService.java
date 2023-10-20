package com.Examen.PortaDeVenta.Service;

import java.util.List;

import com.Examen.PortaDeVenta.Entity.Producto;

public interface ProductoService {

	
public List<Producto> ConsultarPersona();	
	
public Producto CrearProducto(Producto producto);

public Producto ModificarProducto(Producto producto);

public Producto BuscarProducto(int id);

public void EliminarProducto(int id);
}
