package com.Examen.PortaDeVenta.Repository;

import org.springframework.data.repository.CrudRepository;

import com.Examen.PortaDeVenta.Entity.Producto;

public interface ProductoRepo extends CrudRepository<Producto, Integer>  {

}

