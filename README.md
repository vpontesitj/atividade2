

<div align="center">

#  Atividade – Migrations  

</div>

---

<div align="center">

## Criação da tabela **cadastro**  
O código da migration define a tabela **cadastro**, com os campos: id, Nome, Endereço, Telefone e CNPJ.   
![1](https://github.com/user-attachments/assets/b0a480c7-fd67-4b33-aef1-baf912dafed2)

</div>

---

<div align="center">

##  Execução da migration da tabela **cadastro**  
A migration foi executada no terminal e a tabela **cadastro** foi criada com sucesso.  
  
![2](https://github.com/user-attachments/assets/3ff8b45e-f9c3-43fc-a552-bc4a02f4b339)

</div>

---

<div align="center">

##  Consulta no banco da tabela **cadastro**  
Ao consultar no phpMyAdmin, a tabela **cadastro** aparece criada, mas ainda sem registros.  
![3](https://github.com/user-attachments/assets/1bda051b-1ff9-4156-a6d2-fad76c21729f)

  

</div>

---

<div align="center">

##  Criação de uma nova migration para edição da tabela **cadastro**  
Foi criada a migration chamada **edicao_cadastro** para modificar a tabela existente.  
![4](https://github.com/user-attachments/assets/6fe10497-716b-4f0e-9794-c66a66622f19)



</div>

---

<div align="center">

##  Alteração na tabela **cadastro**  
Essa migration adiciona os campos **Razaosocial** e **Nomefantasia** à tabela **cadastro**.  

![5](https://github.com/user-attachments/assets/458380fa-e20e-4265-abb5-2d0682628a56)

</div>

---

<div align="center">

##  Consulta no banco após a alteração  
Ao consultar novamente, é possível ver que a tabela **cadastro** recebeu os novos campos **Razaosocial** e **Nomefantasia**.  
 
![6](https://github.com/user-attachments/assets/ec578399-6e40-4a35-b323-e5c72b032d23)

</div>

---

<div align="center">

##  Criação da tabela **estoque**  
O código da migration cria a tabela **estoque**, com os campos: id, Quantidade, Valor e id_cadastro (chave estrangeira ligada à tabela cadastro).  

 
![7](https://github.com/user-attachments/assets/31bede4c-ed1f-4570-b511-153ab071b59b)

</div>

---

<div align="center">

##  Execução da migration da tabela **estoque**  
A migration foi executada no terminal e a tabela **estoque** foi criada com sucesso.  

![8](https://github.com/user-attachments/assets/f235bb33-e361-4ffe-83e5-741d8a828492)

</div>

---

<div align="center">

##  Consulta no banco da tabela **estoque**  
Ao consultar no phpMyAdmin, a tabela **estoque** aparece criada, mas ainda sem registros.  

![9](https://github.com/user-attachments/assets/74385870-3aad-4324-9224-742bd19f61fd)


---

##  Observação Final  

Durante a execução das migrations, após a abertura de um segundo terminal para rodar os comandos, ocorreu um erro visual que fez com que as saídas aparecessem incompletas em algumas imagens.  

Apesar disso, o funcionamento dos comandos ocorreu normalmente, não comprometendo a criação das tabelas e permitindo a conclusão da atividade com sucesso.  


</div>








