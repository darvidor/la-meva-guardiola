
>[!Caution] 
>You must create the pure tables and then the tables which contains fK!



##  MH

Table to store all Money holders (accounts, wallets, credit cards, insurance life, etc.)

| Field             | type          | Description                                        |
| ----------------- | ------------- | -------------------------------------------------- |
| aka               | unique string | Alias to identify the money holder                 |
| id                | unsigned int  | primary key for internal                           |
| type              | unsigned int  | foreign key for types                              |
| account           | string        | account number / wallet id, etc.                   |
| source            | unsigned int  | foreign key for account originator (bank, network) |
| currency_id       | unsigned int  | foreign key for currencies                         |
| amount            | real          | total amount calculated                            |
| amount_cv         | real          | total amount calculated in internal currency       |
| local_currency_id | unsigned int  |                                                    |
| date              | UTC datetime  | last transaction                                   |
| enabled           | boolean       | if it is available or not                          |
| timestamp         | timestamp     |                                                    |

## Owner


| Field     | Type         | Desciption  |
| --------- | ------------ | ----------- |
| user_id   | unsigned key | foreign key |
| mh_id     | unsigned key | foreign key |
| timestamp | timestamp    |             |

## MH types

| Filed     | type         | Description                               |
| --------- | ------------ | ----------------------------------------- |
| id        | unsigned int | primary                                   |
| type      | string       | Name of the type (wallet, account, vault) |
| timestamp | timestamp    |                                           |

## MH Currencies


| Filed     | type         | Description          |
| --------- | ------------ | -------------------- |
| id        | unsigned int | primary              |
| name      | string       | Name of the currency |
| shortname | string       | Symbol or short name |
| timestamp | timestamp    |                      |

## MH Exchange rates


| Field     | type         | Description  |
| --------- | ------------ | ------------ |
| source_id | unsingedint  |              |
| target_id | unsigned int |              |
| source_er | real         | N amount     |
| target_er | real         | are P amount |
| date      | date         |              |
| timestamp | timestamp    |              |

1 EUR is 1.02 USD


## MH Entities

Sabadell, BBVA, BTC network, etc.

| field | typew        | Description |
| ----- | ------------ | ----------- |
| id    | unsigend int |             |
| name  | string       |             |





