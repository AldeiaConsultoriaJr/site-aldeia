# Site da Aldeia Consultoria Júnior

Esse repositório contém os arquivos do site em produção da Aldeia Consultoria Júnior. A ideia é utilizá-lo como referência para projetos futuros, e que as atualizações sejam salvas e documentadas para posteriormente serem enviadas para o servidor de produção via FTP.

Alguns arquivos com senhas e configurações para acesso ao bancos de dados foram omitidos e devem ser baixados no **Drive da Aldeia** para garantir o funcionamento do site antes de realizar qualquer alteração.

# Instalação
1. Faça download e instale o PHP, Apache e MariaDB (Antigo MySQL). Para tal, recomendo utilizar [Xampp](https://www.apachefriends.org/pt_br/index.html) ou o [Wampp](http://www.wampserver.com/en/). 

2. Após a instalação, encontre a pasta **DocumentRoot**. Dependendo de como optou por efetuar a instalação no passo anterior ela pode se chamar `htdocs` ou `www` e normalmente é encontrada na pasta de instalação do **Xampp**, **Wampp** ou **Apache**.

3. Instale o [Git](https://git-scm.com/) ou um cliente com interface gráfica do Git (Sugiro usar o [GitKraken](https://www.gitkraken.com/))

4. Caso esteja usando o terminal do [Git](https://git-scm.com/), entre na pasta **DocumentRoot** e clone o repositório do site da aldeia utilizando o comando `git clone https://github.com/AldeiaConsultoriaJr/site-aldeia.git`. Caso esteja utilizando um cliente com inteface gráfica do Git, procure a opção **Clone** e salve os arquivos na sua pasta **DocumentRoot**.

5. Faça download dos arquivos com senhas e configurações para acesso ao bancos de dados no **Drive da Aldeia**. Eles podem ser encontrados na pasta `TI/Site da Aldeia/Arquivos de Configuração para acesso aos BDs/`. Copie esses arquivos para a pasta raiz do site.

6. Para verificar tudo correu bem, acesse `http://localhost/site-aldeia/` e `http://aldeiaconsultoriajr.com/`. As duas páginas devem apresentar conteúdo idêntico. 

# Enviando arquivos via FTP para o servidor da Aldeia
1. Faça download de um cliente FTP (recomendo [Filezilla](https://filezilla-project.org/)).
2. Faça login no servidor FTP da aldeia utilizando as credenciais do arquivo `FTP Aldeia` disponível na pasta `TI/Site da Aldeia/Senhas/`.
3. Envie os arquivos na *raiz* do servidor.

# Equipe

* **Rodrigo Araújo Marinho Franco** - *Trabalho inicial/Atualizações do site* - [rodrigoAMF](https://github.com/rodrigoAMF)
* **Vanessa Furtado** - *Atualizações do site* - [FurtadoVanessa](https://github.com/FurtadoVanessa)

Veja também a lista de [contribuidores](https://github.com/AldeiaConsultoriaJr/site-aldeia/graphs/contributors) para ver todos os participantes deste projeto.

## Licença

Este projeto está licenciado sob a licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para mais detalhes.
