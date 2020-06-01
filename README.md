# GraphQL Languages

This simple Drupal GraphQL V4 extension adds some additional querying options for languages.

## Installation

You can install using Composer.

```sh
composer require thaiphan/graphql_languages
```

## Usage

Use the following syntax to retrieve your languages.

```graphql
query {
  languages {
    id
    name
    direction
  }
}
```

You will get the following response:

```json
{
  "data": {
    "languages": [
      {
        "id": "en",
        "name": "English",
        "direction": "ltr"
      },
      {
        "id": "it",
        "name": "Italian",
        "direction": "ltr"
      }
    ]
  }
}
```
