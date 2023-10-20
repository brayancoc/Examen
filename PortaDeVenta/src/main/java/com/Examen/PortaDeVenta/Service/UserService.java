package com.Examen.PortaDeVenta.Service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.Examen.PortaDeVenta.Repository.UserRepository;
import com.Examen.PortaDeVenta.Entity.User;
@Service
public class UserService {
    @Autowired
    private UserRepository userRepository;

    public List<User> findUsersByNombreAndContrasena(String nombre,String contrasena) {
        return userRepository.findByNombreAndContrasena(nombre,contrasena);
   }

	
}