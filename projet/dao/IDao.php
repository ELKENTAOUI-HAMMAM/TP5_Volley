<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author lenovo
 */
interface IDao {
    function create($o);
    function delete($o);
    function update($o);
    function findAll();
    function findById($id);
}
