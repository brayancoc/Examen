package com.Examen.PortaDeVenta.Controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;
import com.Examen.PortaDeVenta.Entity.User;
import com.Examen.PortaDeVenta.Service.UserService;

@CrossOrigin(origins = "http://localhost")

@RestController
@RequestMapping("/users")
public class UserController {
    @Autowired
    private UserService userService;

    @GetMapping("/search")
    public ResponseEntity<List<User>> searchUsersByNombreAndContrasena(
    		@RequestParam String nombre,
    		@RequestParam String contrasena
    		
    		
    		) {
        List<User> users = userService.findUsersByNombreAndContrasena(nombre,contrasena);
        
        return ResponseEntity.ok(users);
    }
}
