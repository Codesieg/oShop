# Routes

## Sprint 1

| URL | HTTP Method | Controller | Method | Title | Content | Comment |
|--|--|--|--|--|--|--|
| `/` | `GET` | `MainController` | `home` | Dans les shoe | 5 categories | - |
| `/catalog/category/[i:id]` | `GET` | `CatalogController` | `category` | Dans les shoe | LIst of products of a certain category| We use the category's id |
| `/catalog/type/[i:id]` | `GET` | `CatalogController` | `type` | Dans les shoe | LIst of type of a certain products| We use the type's id |
| `/catalog/brand/[i:id]` | `GET` | `CatalogController` | `brand` | Dans les shoe | LIst of brand of a certain products| We use the brand's id |
| `/catalog/product/[i:id]` | `GET` | `CatalogController` | `product` | Dans les shoe | LIst of products| We use the product's id |
| `/legal-mentions/` | `GET` | `MainController` | `legal_mentions` | Dans les shoe | Legal mention of the web site| |
| `/404/` | `GET` | `MainController` | `404` | Dans les shoe | RTedirection page if nothing's found| |