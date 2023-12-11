# API Biscoito da Sorte

É um API com laravel para gera messagens aleatoria.


## Documentação da API

#### Retorna Message

```http
  GET /v1/messagerandom
```
#### Cadastra um Message

```http
  POST /v1/MessagePost
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `message`      | `string` | **Obrigatório**. o campo message é requerido |

