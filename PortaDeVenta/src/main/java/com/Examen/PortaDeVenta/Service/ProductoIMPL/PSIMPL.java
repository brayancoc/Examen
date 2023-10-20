package com.Examen.PortaDeVenta.Service.ProductoIMPL;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.Examen.PortaDeVenta.Entity.Producto;
import com.Examen.PortaDeVenta.Service.ProductoService;
import com.Examen.PortaDeVenta.Repository.ProductoRepo;


@Service
public class PSIMPL implements ProductoService {
	
@Autowired

	private ProductoRepo repo;
	
	@Override
	public List<Producto> ConsultarPersona() {
		// TODO Auto-generated method stub
		return (List<Producto>) this.repo.findAll();
	} 
	
	
	@Override
	public Producto CrearProducto(Producto producto) {
	producto.setNombre(producto.getNombre());
		return this.repo.save(producto);
	}
	
	
	
	@Override
	public Producto ModificarProducto(Producto producto) {
		// TODO Auto-generated method stub
		return this.repo.save(producto);
	}
	
	
	@Override
	public Producto BuscarProducto(int id) {
		// TODO Auto-generated method stub
		return this.repo.findById(id).get();
	}
	
	@Override
	public void EliminarProducto(int id) {
		this.repo.deleteById(id);
		
	}
	
	
	
}
