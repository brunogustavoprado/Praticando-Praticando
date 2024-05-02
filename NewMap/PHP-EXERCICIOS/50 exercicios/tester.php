        <?php


            function cadastrarCliente($nome, $cpf)
            {
                    global $clientes;

                        $clientes[$cpf] = $nome;
            }

            function adicionarSaldp($cpf, $valor)
            {
                    global $clientes;

                        $clientesSaldo[$cpf] = $valor;
            }

            function removerCliente($cpf)
            {
                    global $clientes;

                        $clientes[$cpf] = null;
            }

        cadastrarCliente("Matheus", "09936273847");

        cadastrarCliente("Amanda", "099345342437");

        removerCliente("099345342437");

        var_dump($clientes);