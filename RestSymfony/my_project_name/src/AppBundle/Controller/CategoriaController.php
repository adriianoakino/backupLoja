<?php
namespace AppBundle\Controller;
 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Categoria;      

class CategoriaController extends FOSRestController
{

  /**
 * @Rest\Post("/categoria/adicionar/")
 */
 public function categoriaPost(Request $request)
 {
   $data = new Categoria;
   $nomeCategoria = $request->get('nomeCategoria');
  $data->setNomeCategoria($nomeCategoria);
  

  $em = $this->getDoctrine()->getManager();
  $em->persist($data);
  $em->flush();
  return new View("Categoria inserido com sucesso.");
 }


    /**
 * @Rest\Put("/categoria/editar/{id}")
 */
 public function updateAction($id,Request $request)
 { 
 $data = new Categoria;
 $nomeCategoria = $request->get('nomeCategoria');
 $sn = $this->getDoctrine()->getManager();
 $produto = $this->getDoctrine()->getRepository('AppBundle:Categoria')->find($id);
if (empty($produto)) {
   return new View("Categoria not found", Response::HTTP_NOT_FOUND);
 } 

   $produto->setNomeCategoria($nomeCategoria);
   $sn->flush();
   return new View("Produto editado com sucesso.", Response::HTTP_OK);
 

 }


  /**
 * @Rest\Delete("/categoria/deletar/{id}")
 */
 public function deleteAction($id)
 {
  $data = new Categoria;
  $sn = $this->getDoctrine()->getManager();
  $categoria = $this->getDoctrine()->getRepository('AppBundle:Categoria')->find($id);
if (empty($categoria)) {
  return new View("Categoria não encontrado.", Response::HTTP_NOT_FOUND);
 }
 else {
  $sn->remove($categoria);
  $sn->flush();
 }
  return new View("Categoria deletado com sucesso.", Response::HTTP_OK);
 }

     /**
     * @Rest\Get("/categoria/categorias")
     */
    public function getAction()
    {
      $restresult = $this->getDoctrine()->getRepository('AppBundle:Categoria')->findAll();
        if ($restresult === null) {
          return new View("Não existem categorias cadastrados.", Response::HTTP_NOT_FOUND);
     }
     
        return $restresult;
    } 

}
