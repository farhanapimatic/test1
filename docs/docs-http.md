# 



## Server Configuration for Base URLs

This section provides details on the environments available and lists down the servers in each of the environment. The default environment for this API is set to `production` while the default server is set to `AWSECommerceServicePort`.
### Environments

An environment consists of a set of servers with base URL values. The environment can be changed programatically allowing rapid switching between different environments e.g.the user can specify a Production and Testing Environment.The available environments for this API are: 

#### production
The environment comprises of the following servers: 

| Name | Base URL | 
|-----------|-------------|
| AWSECommerceServicePort | https://webservices.amazon.com/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortCA | https://webservices.amazon.ca/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortCN | https://webservices.amazon.cn/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortDE | https://webservices.amazon.de/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortES | https://webservices.amazon.es/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortFR | https://webservices.amazon.fr/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortIN | https://webservices.amazon.in/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortIT | https://webservices.amazon.it/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortJP | https://webservices.amazon.co.jp/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortUK | https://webservices.amazon.co.uk/onca/soap?Service=AWSECommerceService |
| AWSECommerceServicePortUS | https://webservices.amazon.com/onca/soap?Service=AWSECommerceService |




## Authentication
This API uses `OAuth v2.0` with `Authorization Code` grant type.

#### Authorization Endpoint
Authorization grant can be obtained from the authorization endpoint at path `/dfsd`. It will use server `` which will serve as the base URL for this endpoint. 
#### Token Endpoint
Access token can be obtained from the token endpoint at path `/sdfsdf`. It will use server `` which will serve as the base URL for this endpoint. 


### Scopes

The API makes use of the following OAuth scopes: 

| Name | Value | Description |
| ---- | ----- | ----------- |
| asda | asdasd | TODO: add a description |


### Additional Headers

Additional authentication headers that will be sent with your API requests are listed below:

| Parameter | Description | Example | 
|-----------|-------------| ------- |
| a&f__ieyt* | TODO: Add a parameter description | `"a&f__ieyt*"` | 
| b | TODO: Add a parameter description | `"b"` | 
| c | TODO: Add a parameter description | `"c"` | 



## Global API Errors
Global API errors are applied across all endpoints.

**410** 
> new

Body ([](#)) 
```
"body"
```



# <a name="api_reference"></a>API Reference

* [AWSECommerceServiceBinding](#awse_commerce_service_binding)
* [OAuth Authorization](#o_auth_authorization)

## <a name="awse_commerce_service_binding"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "AWSECommerceServiceBinding") AWSECommerceServiceBinding


### <a name="cart_clear"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear") CartClear


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description



#### Scopes
The list of required scopes for this endpoint are:

- [`g`](#scopes)



#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 49,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 7,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 7,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 7
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 7
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 7
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 7,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 7,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 7,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 7,
          "MinimumPrice": 7,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 7
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 7,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 7,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 7,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 7,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 7.77251214616583
    }
  }
}
```


**410** 

> new

Body ([](#)) 
```
"body"
```


### <a name="cart_modify"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify") CartModify


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 99
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 99
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 99,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 99,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 99,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 99
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 99
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 99
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 99,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 99,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 99,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 99,
          "MinimumPrice": 99,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 99
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 99,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 99,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 99,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 190,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 190.76307592949
    }
  }
}
```


### <a name="cart_create"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate") CartCreate


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 190
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 190
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 190,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 190,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 190,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 190
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 190
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 190
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 190,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 190,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 190,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 190,
          "MinimumPrice": 190,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 190
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 190,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 190,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 190,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 190,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 149.039902702924
    }
  }
}
```


### <a name="cart_add"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd") CartAdd


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 149
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 149
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 149,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 149,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 149,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 149
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 149
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 149
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 149,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 149,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 149,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 149,
          "MinimumPrice": 149,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 149
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 149,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 149,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 149,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 149,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 240.535184594586
    }
  }
}
```


### <a name="cart_get"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet") CartGet


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 240.535184594586
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 240,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 240,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 240,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 240
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 240
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 240
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 240,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 240,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 240,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 240,
            "MinimumPrice": 240,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 240
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 240,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 240,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 240,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 198,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="similarity_lookup"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup") SimilarityLookup


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 198
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 198.81201136802
    }
  }
}
```


### <a name="browse_node_lookup"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup") BrowseNodeLookup


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 198.81201136802
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 198
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 198
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 198
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 198,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 198,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 198,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 198,
            "MinimumPrice": 198,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 198
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": true,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="item_lookup"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup") ItemLookup


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 35,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 35,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 35
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 35.3072932596818
    }
  }
}
```


### <a name="item_search"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch") ItemSearch


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 35,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 35,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 35,
        "MinimumPrice": 35,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 35
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 35,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 35,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 35,
      "MinimumPrice": 35,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 35
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 35
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 35.3072932596818
    }
  }
}
```


### <a name="item_search9"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch9") ItemSearch9


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCA`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 35,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 35,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 35,
        "MinimumPrice": 35,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 35
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 35,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 35,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 35,
      "MinimumPrice": 35,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 35
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 35
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 35.3072932596818
    }
  }
}
```


### <a name="item_lookup10"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup10") ItemLookup10


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCA`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 126,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 126,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 126
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 126.802575151344
    }
  }
}
```


### <a name="browse_node_lookup11"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup11") BrowseNodeLookup11


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCA`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 126.802575151344
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 126
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 126
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 126
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 126,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 126,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 126,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 126,
            "MinimumPrice": 126,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 126
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": false,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup12"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup12") SimilarityLookup12


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCA`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 85
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 85.0794019247775
    }
  }
}
```


### <a name="cart_get13"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet13") CartGet13


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCA`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 85.0794019247775
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 85,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 85,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 85,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 85
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 85
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 85
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 85,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 85,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 85,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 85,
            "MinimumPrice": 85,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 85
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 85,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 85,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 85,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 85,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add14"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd14") CartAdd14


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCA`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 85
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 176
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 176,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 176,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 176,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 176
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 176
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 176
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 176,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 176,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 176,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 176,
          "MinimumPrice": 176,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 176
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 176,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 176,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 176,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 176,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 176.57468381644
    }
  }
}
```


### <a name="cart_create15"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate15") CartCreate15


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCA`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 176
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 13
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 13,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 13,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 13,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 13
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 13
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 13
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 13,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 13,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 13,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 13,
          "MinimumPrice": 13,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 13
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 13,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 13,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 13,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 13,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 13.0699657081021
    }
  }
}
```


### <a name="cart_modify16"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify16") CartModify16


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCA`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 13
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 13
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 226,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 226,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 226,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 226
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 226
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 226
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 226,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 226,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 226,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 226,
          "MinimumPrice": 226,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 226
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 226,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 226,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 226,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 226,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 226.346792481535
    }
  }
}
```


### <a name="cart_clear17"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear17") CartClear17


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCA`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 62,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 62,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 62,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 62
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 62
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 62
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 62,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 62,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 62,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 62,
          "MinimumPrice": 62,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 62
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 62,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 62,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 62,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 62,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 62.8420743731978
    }
  }
}
```


### <a name="item_search18"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch18") ItemSearch18


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 62,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 62,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 62,
        "MinimumPrice": 62,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 62
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 62,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 62,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 62,
      "MinimumPrice": 62,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 62
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 21
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 21.1189011466312
    }
  }
}
```


### <a name="item_lookup19"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup19") ItemLookup19


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 21,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 21,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 21
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 21.1189011466312
    }
  }
}
```


### <a name="browse_node_lookup20"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup20") BrowseNodeLookup20


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 21.1189011466312
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 21
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 21
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 21
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 21,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 21,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 21,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 21,
            "MinimumPrice": 21,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 21
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": false,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup21"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup21") SimilarityLookup21


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 112
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 112.614183038293
    }
  }
}
```


### <a name="cart_get22"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet22") CartGet22


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 112.614183038293
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 112,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 112,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 112,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 112
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 112
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 112
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 112,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 112,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 112,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 112,
            "MinimumPrice": 112,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 112
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 112,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 112,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 112,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 112,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add23"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd23") CartAdd23


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 204
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 204
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 204,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 204,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 204,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 204
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 204
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 204
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 204,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 204,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 204,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 204,
          "MinimumPrice": 204,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 204
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 204,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 204,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 204,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 204,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 204.109464929956
    }
  }
}
```


### <a name="cart_create24"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate24") CartCreate24


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 162
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 162
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 162,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 162,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 162,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 162
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 162
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 162
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 162,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 162,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 162,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 162,
          "MinimumPrice": 162,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 162
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 162,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 162,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 162,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 162,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 162.386291703389
    }
  }
}
```


### <a name="cart_modify25"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify25") CartModify25


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 253
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 253
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 253,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 253,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 253,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 253
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 253
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 253
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 253,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 253,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 253,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 253,
          "MinimumPrice": 253,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 253
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 253,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 253,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 253,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 253,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 253.881573595051
    }
  }
}
```


### <a name="cart_clear26"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear26") CartClear26


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortCN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 90,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 90,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 90,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 90
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 90
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 90
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 90,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 90,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 90,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 90,
          "MinimumPrice": 90,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 90
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 90,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 90,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 90,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 90,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 90.3768554867137
    }
  }
}
```


### <a name="item_search27"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch27") ItemSearch27


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortDE`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 48,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 48,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 48,
        "MinimumPrice": 48,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 48
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 48,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 48,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 48,
      "MinimumPrice": 48,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 48
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 48
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 48.6536822601472
    }
  }
}
```


### <a name="item_lookup28"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup28") ItemLookup28


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortDE`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 48,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 48,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 48
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 48.6536822601472
    }
  }
}
```


### <a name="browse_node_lookup29"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup29") BrowseNodeLookup29


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortDE`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 48.6536822601472
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 48
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 48
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 48
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 48,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 48,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 48,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 48,
            "MinimumPrice": 48,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 48
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": true,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup30"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup30") SimilarityLookup30


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortDE`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 140
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 140.148964151809
    }
  }
}
```


### <a name="cart_get31"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet31") CartGet31


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortDE`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 140.148964151809
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 140,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 140,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 140,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 140
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 140
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 140
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 140,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 140,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 140,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 140,
            "MinimumPrice": 140,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 140
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 140,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 140,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 98,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 98,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add32"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd32") CartAdd32


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortDE`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 98
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 98
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 98,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 98,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 98,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 98
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 98
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 98
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 98,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 98,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 98,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 98,
          "MinimumPrice": 98,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 98
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 98,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 98,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 98,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 98,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 189.921072816905
    }
  }
}
```


### <a name="cart_create33"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate33") CartCreate33


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortDE`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 189
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 189
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 189,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 189,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 189,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 189
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 189
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 189
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 189,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 189,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 189,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 189,
          "MinimumPrice": 189,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 189
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 189,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 189,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 189,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 189,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 189.921072816905
    }
  }
}
```


### <a name="cart_modify34"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify34") CartModify34


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortDE`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 26
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 26
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 26,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 26,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 26,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 26
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 26
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 26
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 26,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 26,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 26,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 26,
          "MinimumPrice": 26,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 26
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 26,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 26,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 26,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 26,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 26.4163547085674
    }
  }
}
```


### <a name="cart_clear35"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear35") CartClear35


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortDE`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 239,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 239,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 239,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 239
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 239
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 239
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 239,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 239,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 239,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 239,
          "MinimumPrice": 239,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 239
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 239,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 239,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 239,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 239,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 239.693181482001
    }
  }
}
```


### <a name="item_search36"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch36") ItemSearch36


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortES`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 76,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 76,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 76,
        "MinimumPrice": 76,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 76
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 76,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 76,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 76,
      "MinimumPrice": 76,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 76
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 76
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 76.1884633736631
    }
  }
}
```


### <a name="item_lookup37"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup37") ItemLookup37


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortES`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 76,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 76,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 76
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 76.1884633736631
    }
  }
}
```


### <a name="browse_node_lookup38"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup38") BrowseNodeLookup38


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortES`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 76.1884633736631
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 76
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 76
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 76
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 76,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 167,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 167,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 167,
            "MinimumPrice": 167,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 167
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": true,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup39"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup39") SimilarityLookup39


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortES`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 167
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 167.683745265325
    }
  }
}
```


### <a name="cart_get40"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet40") CartGet40


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortES`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 167.683745265325
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 167,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 167,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 167,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 167
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 167
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 167
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 167,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 167,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 167,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 167,
            "MinimumPrice": 125,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 125
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 125,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 125,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 125,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 125,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add41"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd41") CartAdd41


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortES`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 125
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 125
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 125,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 125,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 125,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 125
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 125
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 125
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 125,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 125,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 125,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 125,
          "MinimumPrice": 125,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 125
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 125,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 217,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 217,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 217,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 217.455853930421
    }
  }
}
```


### <a name="cart_create42"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate42") CartCreate42


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortES`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 217
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 217
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 217,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 217,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 217,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 217
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 217
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 217
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 217,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 217,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 217,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 217,
          "MinimumPrice": 217,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 217
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 217,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 217,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 217,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 175,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 175.732680703854
    }
  }
}
```


### <a name="cart_modify43"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify43") CartModify43


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortES`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 175
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 175
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 175,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 175,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 175,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 175
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 175
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 175
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 175,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 175,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 175,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 175,
          "MinimumPrice": 175,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 175
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 175,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 175,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 175,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 175,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 12.2279625955168
    }
  }
}
```


### <a name="cart_clear44"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear44") CartClear44


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortES`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 12,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 12,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 12,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 12
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 12
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 12
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 12,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 12,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 12,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 12,
          "MinimumPrice": 12,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 12
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 12,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 12,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 12,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 12,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 103.723244487179
    }
  }
}
```


### <a name="item_search45"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch45") ItemSearch45


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortFR`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 103,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 103,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 103,
        "MinimumPrice": 103,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 103
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 103,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 103,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 103,
      "MinimumPrice": 103,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 103
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 103
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 103.723244487179
    }
  }
}
```


### <a name="item_lookup46"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup46") ItemLookup46


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortFR`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 103,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 103,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 103
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 103.723244487179
    }
  }
}
```


### <a name="browse_node_lookup47"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup47") BrowseNodeLookup47


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortFR`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 103.723244487179
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 103
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 103
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 62
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 62,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 62,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 62,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 62,
            "MinimumPrice": 62,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 62
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": false,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup48"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup48") SimilarityLookup48


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortFR`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 62
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 62.0000712606125
    }
  }
}
```


### <a name="cart_get49"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet49") CartGet49


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortFR`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 62.0000712606125
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 62,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 62,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 62,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 62
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 62
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 62
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 153,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 153,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 153,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 153,
            "MinimumPrice": 153,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 153
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 153,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 153,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 153,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 153,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add50"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd50") CartAdd50


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortFR`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 153
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 153
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 153,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 153,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 153,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 153
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 153
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 153
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 153,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 153,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 153,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 153,
          "MinimumPrice": 153,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 153
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 244,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 244,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 244,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 244,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 244.990635043937
    }
  }
}
```


### <a name="cart_create51"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate51") CartCreate51


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortFR`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 244
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 244
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 244,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 244,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 244,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 244
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 244
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 244
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 244,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 244,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 244,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 244,
          "MinimumPrice": 244,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 244
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 203,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 203,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 203,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 203,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 203.26746181737
    }
  }
}
```


### <a name="cart_modify52"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify52") CartModify52


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortFR`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 203
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 203
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 203,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 203,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 203,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 203
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 203
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 203
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 203,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 203,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 203,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 203,
          "MinimumPrice": 203,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 203
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 203,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 203,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 203,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 203,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 39.7627437090328
    }
  }
}
```


### <a name="cart_clear53"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear53") CartClear53


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortFR`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 39,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 39,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 39,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 39
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 39
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 39
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 39,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 39,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 39,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 39,
          "MinimumPrice": 39,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 39
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 39,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 39,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 39,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 39,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 253.039570482466
    }
  }
}
```


### <a name="item_search54"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch54") ItemSearch54


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 253,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 253,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 253,
        "MinimumPrice": 253,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 253
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 253,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 253,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 253,
      "MinimumPrice": 253,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 253
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 253
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 253.039570482466
    }
  }
}
```


### <a name="item_lookup55"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup55") ItemLookup55


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 253,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 253,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 253
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 253.039570482466
    }
  }
}
```


### <a name="browse_node_lookup56"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup56") BrowseNodeLookup56


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 253.039570482466
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 253
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 89
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 89
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 89,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 89,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 89,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 89,
            "MinimumPrice": 89,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 89
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": false,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup57"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup57") SimilarityLookup57


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 89
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 89.5348523741285
    }
  }
}
```


### <a name="cart_get58"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet58") CartGet58


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 89.5348523741285
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 89,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 89,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 89,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 89
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 181
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 181
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 181,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 181,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 181,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 181,
            "MinimumPrice": 181,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 181
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 181,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 181,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 181,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 181,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add59"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd59") CartAdd59


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 181
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 181
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 181,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 181,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 181,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 181
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 181
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 181
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 181,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 181,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 181,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 181,
          "MinimumPrice": 139,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 139
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 139,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 139,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 139,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 139,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 139.306961039224
    }
  }
}
```


### <a name="cart_create60"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate60") CartCreate60


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 139
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 139
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 139,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 139,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 139,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 139
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 139
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 139
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 139,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 139,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 139,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 139,
          "MinimumPrice": 139,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 139
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 230,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 230,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 230,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 230,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 230.802242930886
    }
  }
}
```


### <a name="cart_modify61"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify61") CartModify61


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 230
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 230
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 230,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 230,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 230,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 230
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 230
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 230
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 230,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 230,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 230,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 230,
          "MinimumPrice": 230,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 230
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 67,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 67,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 67,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 67,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 67.2975248225487
    }
  }
}
```


### <a name="cart_clear62"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear62") CartClear62


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIN`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 67,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 67,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 67,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 67
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 67
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 67
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 67,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 67,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 67,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 67,
          "MinimumPrice": 67,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 67
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 67,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 67,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 67,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 25,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 25.5743515959821
    }
  }
}
```


### <a name="item_search63"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch63") ItemSearch63


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIT`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 25,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 25,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 25,
        "MinimumPrice": 25,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 25
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 25,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 25,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 25,
      "MinimumPrice": 25,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 25
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 25
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 25.5743515959821
    }
  }
}
```


### <a name="item_lookup64"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup64") ItemLookup64


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIT`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 25,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 25,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 25
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 25.5743515959821
    }
  }
}
```


### <a name="browse_node_lookup65"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup65") BrowseNodeLookup65


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIT`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 117.069633487644
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 117
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 117
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 117
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 117,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 117,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 117,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 117,
            "MinimumPrice": 117,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 117
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": false,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup66"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup66") SimilarityLookup66


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIT`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 117
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 117.069633487644
    }
  }
}
```


### <a name="cart_get67"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet67") CartGet67


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIT`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 117.069633487644
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 75,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 75,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 75,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 75
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 75
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 75
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 75,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 75,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 75,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 75,
            "MinimumPrice": 75,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 75
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 75,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 75,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 75,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 75,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add68"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd68") CartAdd68


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIT`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 75
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 75
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 166,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 166,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 166,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 166
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 166
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 166
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 166,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 166,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 166,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 166,
          "MinimumPrice": 166,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 166
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 166,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 166,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 166,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 166,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 166.84174215274
    }
  }
}
```


### <a name="cart_create69"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate69") CartCreate69


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIT`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 166
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 166
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 3,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 3,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 3,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 3
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 3
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 3
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 3,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 3,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 3,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 3,
          "MinimumPrice": 3,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 3
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 3,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 3,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 3,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 3,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 3.33702404440242
    }
  }
}
```


### <a name="cart_modify70"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify70") CartModify70


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIT`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 3
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 3
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 3,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 216,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 216,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 216
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 216
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 216
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 216,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 216,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 216,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 216,
          "MinimumPrice": 216,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 216
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 216,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 216,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 216,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 216,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 216.613850817836
    }
  }
}
```


### <a name="cart_clear71"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear71") CartClear71


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortIT`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 53,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 53,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 53,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 53
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 53
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 53
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 53,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 53,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 53,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 53,
          "MinimumPrice": 53,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 53
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 53,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 53,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 53,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 53,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 53.1091327094981
    }
  }
}
```


### <a name="item_search72"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch72") ItemSearch72


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortJP`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 53,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 53,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 53,
        "MinimumPrice": 53,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 53
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 53,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 53,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 53,
      "MinimumPrice": 53,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 53
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 144
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 144.60441460116
    }
  }
}
```


### <a name="item_lookup73"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup73") ItemLookup73


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortJP`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 144,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 144,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 144
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 144.60441460116
    }
  }
}
```


### <a name="browse_node_lookup74"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup74") BrowseNodeLookup74


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortJP`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 144.60441460116
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 144
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 144
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 144
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 144,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 144,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 144,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 144,
            "MinimumPrice": 144,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 144
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": true,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup75"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup75") SimilarityLookup75


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortJP`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 102
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 102.881241374594
    }
  }
}
```


### <a name="cart_get76"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet76") CartGet76


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortJP`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 102.881241374594
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 102,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 102,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 102,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 102
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 102
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 102
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 102,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 102,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 102,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 102,
            "MinimumPrice": 102,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 102
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 102,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 102,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 102,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 194,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add77"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd77") CartAdd77


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortJP`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 194
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 194
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 194,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 194,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 194,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 194
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 194
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 194
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 194,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 194,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 194,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 194,
          "MinimumPrice": 194,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 194
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 194,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 194,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 194,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 194,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 152.65335003969
    }
  }
}
```


### <a name="cart_create78"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate78") CartCreate78


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortJP`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 152
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 152
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 152,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 152,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 152,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 152
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 152
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 152
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 152,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 152,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 152,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 152,
          "MinimumPrice": 152,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 152
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 152,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 152,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 152,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 152,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 244.148631931352
    }
  }
}
```


### <a name="cart_modify79"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify79") CartModify79


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortJP`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 244
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 244
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 244,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 244,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 244,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 244
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 244
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 244
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 244,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 244,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 244,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 244,
          "MinimumPrice": 244,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 244
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 244,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 244,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 244,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 244,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 80.6439138230141
    }
  }
}
```


### <a name="cart_clear80"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear80") CartClear80


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortJP`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 80,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 80,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 80,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 80
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 80
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 80
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 80,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 80,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 80,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 80,
          "MinimumPrice": 80,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 80
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 80,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 80,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 80,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 80,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 38.9207405964475
    }
  }
}
```


### <a name="item_search81"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch81") ItemSearch81


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUK`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 38,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 38,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 38,
        "MinimumPrice": 38,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 38
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 38,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 38,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 38,
      "MinimumPrice": 38,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 38
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 38
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 38.9207405964475
    }
  }
}
```


### <a name="item_lookup82"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup82") ItemLookup82


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUK`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 38,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 38,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 38
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 38.9207405964475
    }
  }
}
```


### <a name="browse_node_lookup83"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup83") BrowseNodeLookup83


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUK`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 38.9207405964475
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 130
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 130
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 130
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 130,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 130,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 130,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 130,
            "MinimumPrice": 130,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 130
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": true,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup84"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup84") SimilarityLookup84


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUK`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 130
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 130.41602248811
    }
  }
}
```


### <a name="cart_get85"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet85") CartGet85


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUK`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 130.41602248811
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 130,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 130,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 130,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 221
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 221
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 221
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 221,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 221,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 221,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 221,
            "MinimumPrice": 221,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 221
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 221,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 221,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 221,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 221,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add86"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd86") CartAdd86


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUK`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 221
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 221
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 221,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 221,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 221,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 180
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 180
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 180
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 180,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 180,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 180,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 180,
          "MinimumPrice": 180,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 180
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 180,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 180,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 180,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 180,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 180.188131153205
    }
  }
}
```


### <a name="cart_create87"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate87") CartCreate87


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUK`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 180
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 180
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 180,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 180,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 180,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 180
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 180
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 16
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 16,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 16,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 16,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 16,
          "MinimumPrice": 16,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 16
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 16,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 16,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 16,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 16,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 16.6834130448678
    }
  }
}
```


### <a name="cart_modify88"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify88") CartModify88


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUK`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 16
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 16
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 16,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 16,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 16,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 16
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 16
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 229
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 229,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 229,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 229,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 229,
          "MinimumPrice": 229,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 229
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 229,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 229,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 229,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 229,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 229.960239818301
    }
  }
}
```


### <a name="cart_clear89"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear89") CartClear89


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUK`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 229,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 229,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 229,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 229
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 229
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 229
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 229,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 66,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 66,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 66,
          "MinimumPrice": 66,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 66
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 66,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 66,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 66,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 66,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 66.4555217099634
    }
  }
}
```


### <a name="item_search90"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemSearch90") ItemSearch90


**`POST`** `/ItemSearch`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUS`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemSearchRequestMsg](#item_search_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Availability": "Available",
        "Actor": "Actor",
        "Artist": "Artist",
        "AudienceRating": [
          "G"
        ],
        "Author": "Author",
        "Brand": "Brand",
        "BrowseNode": "BrowseNode",
        "Composer": "Composer",
        "Condition": "All",
        "Conductor": "Conductor",
        "Director": "Director",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemPage": 66,
        "Keywords": "Keywords",
        "Manufacturer": "Manufacturer",
        "MaximumPrice": 66,
        "MerchantId": "MerchantId",
        "MinPercentageOff": 66,
        "MinimumPrice": 66,
        "MusicLabel": "MusicLabel",
        "Orchestra": "Orchestra",
        "Power": "Power",
        "Publisher": "Publisher",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ReleaseDate": "ReleaseDate",
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "Sort": "Sort",
        "Title": "Title",
        "TruncateReviewsAt": 66
      }
    ],
    "Shared": {
      "Availability": "Available",
      "Actor": "Actor",
      "Artist": "Artist",
      "AudienceRating": [
        "G"
      ],
      "Author": "Author",
      "Brand": "Brand",
      "BrowseNode": "BrowseNode",
      "Composer": "Composer",
      "Condition": "All",
      "Conductor": "Conductor",
      "Director": "Director",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemPage": 157,
      "Keywords": "Keywords",
      "Manufacturer": "Manufacturer",
      "MaximumPrice": 157,
      "MerchantId": "MerchantId",
      "MinPercentageOff": 157,
      "MinimumPrice": 157,
      "MusicLabel": "MusicLabel",
      "Orchestra": "Orchestra",
      "Power": "Power",
      "Publisher": "Publisher",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ReleaseDate": "ReleaseDate",
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "Sort": "Sort",
      "Title": "Title",
      "TruncateReviewsAt": 157
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemSearchResponseMsg](#item_search_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 157
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 157.950803601626
    }
  }
}
```


### <a name="item_lookup91"></a>![Endpoint: ](https://apidocs.io/img/method.png "ItemLookup91") ItemLookup91


**`POST`** `/ItemLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUS`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [ItemLookupRequestMsg](#item_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "IdType": "ASIN",
        "IncludeReviewsSummary": "IncludeReviewsSummary",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "RelatedItemPage": "RelatedItemPage",
        "RelationshipType": [
          "RelationshipType"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ],
        "SearchIndex": "SearchIndex",
        "TruncateReviewsAt": 157,
        "VariationPage": "VariationPage"
      }
    ],
    "Shared": {
      "Condition": "All",
      "IdType": "ASIN",
      "IncludeReviewsSummary": "IncludeReviewsSummary",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "RelatedItemPage": "RelatedItemPage",
      "RelationshipType": [
        "RelationshipType"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ],
      "SearchIndex": "SearchIndex",
      "TruncateReviewsAt": 157,
      "VariationPage": "VariationPage"
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([ItemLookupResponseMsg](#item_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 157
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 157.950803601626
    }
  }
}
```


### <a name="browse_node_lookup92"></a>![Endpoint: ](https://apidocs.io/img/method.png "BrowseNodeLookup92") BrowseNodeLookup92


**`POST`** `/BrowseNodeLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUS`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [BrowseNodeLookupRequestMsg](#browse_node_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "BrowseNodeId": [
          "BrowseNodeId"
        ],
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "BrowseNodeId": [
        "BrowseNodeId"
      ],
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([BrowseNodeLookupResponseMsg](#browse_node_lookup_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 157.950803601626
    },
    "BrowseNodes": [
      {
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 157
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 157
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 157
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 157,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 157,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 157,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 157,
            "MinimumPrice": 157,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 157
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "BrowseNode": [
          {
            "Ancestors": {
              "BrowseNode": []
            },
            "Children": {
              "BrowseNode": []
            },
            "NewReleases": {
              "NewRelease": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "Properties": {
              "Property": [
                {
                  "Name": "Name",
                  "Value": "Value"
                }
              ]
            },
            "TopSellers": {
              "TopSeller": {
                "ASIN": "ASIN",
                "Title": "Title"
              }
            },
            "BrowseNodeId": "BrowseNodeId",
            "IsCategoryRoot": false,
            "Name": "Name",
            "TopItemSet": [
              {
                "TopItem": {
                  "ASIN": "ASIN",
                  "Actor": [
                    "Actor"
                  ],
                  "Artist": [
                    "Artist"
                  ],
                  "Author": [
                    "Author"
                  ],
                  "DetailPageURL": "DetailPageURL",
                  "ProductGroup": "ProductGroup",
                  "Title": "Title"
                },
                "Type": "Type"
              }
            ]
          }
        ]
      }
    ]
  }
}
```


### <a name="similarity_lookup93"></a>![Endpoint: ](https://apidocs.io/img/method.png "SimilarityLookup93") SimilarityLookup93


**`POST`** `/SimilarityLookup`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUS`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [SimilarityLookupRequestMsg](#similarity_lookup_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Condition": "All",
        "SimilarityType": "Intersection",
        "ItemId": [
          "ItemId"
        ],
        "MerchantId": "MerchantId",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Condition": "All",
      "SimilarityType": "Intersection",
      "ItemId": [
        "ItemId"
      ],
      "MerchantId": "MerchantId",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([SimilarityLookupResponseMsg](#similarity_lookup_response_msg)) 
```
{
  "body": {
    "Items": {
      "Item": {
        "ASIN": "ASIN",
        "AssociateTag": "AssociateTag",
        "ListItemId": "ListItemId",
        "OfferListingId": "OfferListingId",
        "Quantity": 116
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 116.227630375059
    }
  }
}
```


### <a name="cart_get94"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartGet94") CartGet94


**`POST`** `/CartGet`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUS`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartGetRequestMsg](#cart_get_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartGetResponseMsg](#cart_get_response_msg)) 
```
{
  "body": {
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 116.227630375059
    },
    "Cart": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "URLEncodedHMAC": "URLEncodedHMAC",
        "CartItems": {
          "CartItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 116,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 116,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 116,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "MobileCartURL": "MobileCartURL",
        "NewReleases": {
          "NewRelease": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "OtherCategoriesSimilarProducts": {
          "OtherCategoriesSimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "PurchaseURL": "PurchaseURL",
        "Request": {
          "BrowseNodeLookupRequest": {
            "BrowseNodeId": [
              "BrowseNodeId"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartAddRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 116
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartClearRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartCreateRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 116
              }
            },
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartGetRequest": {
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "CartModifyRequest": {
            "Items": {
              "Item": {
                "ASIN": "ASIN",
                "AssociateTag": "AssociateTag",
                "ListItemId": "ListItemId",
                "OfferListingId": "OfferListingId",
                "Quantity": 116
              }
            },
            "CartId": "CartId",
            "HMAC": "HMAC",
            "MergeCart": "MergeCart",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "Errors": {
            "Error": {
              "Code": "Code",
              "Message": "Message"
            }
          },
          "ItemLookupRequest": {
            "Condition": "All",
            "IdType": "ASIN",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "TruncateReviewsAt": 116,
            "VariationPage": "VariationPage"
          },
          "ItemSearchRequest": {
            "Availability": "Available",
            "Actor": "Actor",
            "Artist": "Artist",
            "AudienceRating": [
              "G"
            ],
            "Author": "Author",
            "Brand": "Brand",
            "BrowseNode": "BrowseNode",
            "Composer": "Composer",
            "Condition": "All",
            "Conductor": "Conductor",
            "Director": "Director",
            "IncludeReviewsSummary": "IncludeReviewsSummary",
            "ItemPage": 116,
            "Keywords": "Keywords",
            "Manufacturer": "Manufacturer",
            "MaximumPrice": 116,
            "MerchantId": "MerchantId",
            "MinPercentageOff": 116,
            "MinimumPrice": 116,
            "MusicLabel": "MusicLabel",
            "Orchestra": "Orchestra",
            "Power": "Power",
            "Publisher": "Publisher",
            "RelatedItemPage": "RelatedItemPage",
            "RelationshipType": [
              "RelationshipType"
            ],
            "ReleaseDate": "ReleaseDate",
            "ResponseGroup": [
              "ResponseGroup"
            ],
            "SearchIndex": "SearchIndex",
            "Sort": "Sort",
            "Title": "Title",
            "TruncateReviewsAt": 116
          },
          "SimilarityLookupRequest": {
            "Condition": "All",
            "SimilarityType": "Intersection",
            "ItemId": [
              "ItemId"
            ],
            "MerchantId": "MerchantId",
            "ResponseGroup": [
              "ResponseGroup"
            ]
          },
          "IsValid": "IsValid"
        },
        "SavedForLaterItems": {
          "SavedForLaterItem": [
            {
              "CartItemId": "CartItemId",
              "MetaData": {
                "KeyValuePair": {
                  "Key": "Key",
                  "Value": "Value"
                }
              },
              "Price": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 207,
                "CurrencyCode": "CurrencyCode"
              },
              "Quantity": "Quantity",
              "ASIN": "ASIN",
              "ItemTotal": {
                "FormattedPrice": "FormattedPrice",
                "Amount": 207,
                "CurrencyCode": "CurrencyCode"
              },
              "ProductGroup": "ProductGroup",
              "SellerNickname": "SellerNickname",
              "Title": "Title"
            }
          ],
          "SubTotal": {
            "FormattedPrice": "FormattedPrice",
            "Amount": 207,
            "CurrencyCode": "CurrencyCode"
          }
        },
        "SimilarProducts": {
          "SimilarProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SimilarViewedProducts": {
          "SimilarViewedProduct": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        },
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 207,
          "CurrencyCode": "CurrencyCode"
        },
        "TopSellers": {
          "TopSeller": {
            "ASIN": "ASIN",
            "Title": "Title"
          }
        }
      }
    ]
  }
}
```


### <a name="cart_add95"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartAdd95") CartAdd95


**`POST`** `/CartAdd`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUS`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartAddRequestMsg](#cart_add_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 207
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 207
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartAddResponseMsg](#cart_add_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 207,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 207,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 207,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 207
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 207
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 207
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 207,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 207,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 207,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 207,
          "MinimumPrice": 207,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 207
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 44,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 44,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 44,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 44,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 44.2181941583837
    }
  }
}
```


### <a name="cart_create96"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartCreate96") CartCreate96


**`POST`** `/CartCreate`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUS`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartCreateRequestMsg](#cart_create_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 44
          }
        },
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 44
        }
      },
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartCreateResponseMsg](#cart_create_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 44,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 44,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 44,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 44
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 44
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 44
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 2,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 2,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 2,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 2,
          "MinimumPrice": 2,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 2
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 2,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 2,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 2,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 2,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 2.49502093181714
    }
  }
}
```


### <a name="cart_modify97"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartModify97") CartModify97


**`POST`** `/CartModify`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUS`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartModifyRequestMsg](#cart_modify_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "Items": {
          "Item": {
            "ASIN": "ASIN",
            "AssociateTag": "AssociateTag",
            "ListItemId": "ListItemId",
            "OfferListingId": "OfferListingId",
            "Quantity": 2
          }
        },
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "Items": {
        "Item": {
          "ASIN": "ASIN",
          "AssociateTag": "AssociateTag",
          "ListItemId": "ListItemId",
          "OfferListingId": "OfferListingId",
          "Quantity": 2
        }
      },
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartModifyResponseMsg](#cart_modify_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 2,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 2,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 2,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 2
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 2
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 2
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 2,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 93,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 93,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 93,
          "MinimumPrice": 93,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 93
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 93,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 93,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 93,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 93,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 93.9903028234794
    }
  }
}
```


### <a name="cart_clear98"></a>![Endpoint: ](https://apidocs.io/img/method.png "CartClear98") CartClear98


**`POST`** `/CartClear`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


#### Base URL
This endpoint uses server `AWSECommerceServicePortUS`.


#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [CartClearRequestMsg](#cart_clear_request_msg) |  ``` Required ```  | TODO: Add description | 

 Example 
``` 
{
  "body": {
    "AWSAccessKeyId": "AWSAccessKeyId",
    "AssociateTag": "AssociateTag",
    "MarketplaceDomain": "MarketplaceDomain",
    "Request": [
      {
        "CartId": "CartId",
        "HMAC": "HMAC",
        "MergeCart": "MergeCart",
        "ResponseGroup": [
          "ResponseGroup"
        ]
      }
    ],
    "Shared": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "MergeCart": "MergeCart",
      "ResponseGroup": [
        "ResponseGroup"
      ]
    },
    "Validate": "Validate",
    "XMLEscaping": "XMLEscaping"
  }
}
``` 

#### Responses
**200** 


Body ([CartClearResponseMsg](#cart_clear_response_msg)) 
```
{
  "body": {
    "Cart": {
      "CartId": "CartId",
      "HMAC": "HMAC",
      "URLEncodedHMAC": "URLEncodedHMAC",
      "CartItems": {
        "CartItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 93,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 93,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 93,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "MobileCartURL": "MobileCartURL",
      "NewReleases": {
        "NewRelease": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "OtherCategoriesSimilarProducts": {
        "OtherCategoriesSimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "PurchaseURL": "PurchaseURL",
      "Request": {
        "BrowseNodeLookupRequest": {
          "BrowseNodeId": [
            "BrowseNodeId"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartAddRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 93
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartClearRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartCreateRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 93
            }
          },
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartGetRequest": {
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "CartModifyRequest": {
          "Items": {
            "Item": {
              "ASIN": "ASIN",
              "AssociateTag": "AssociateTag",
              "ListItemId": "ListItemId",
              "OfferListingId": "OfferListingId",
              "Quantity": 93
            }
          },
          "CartId": "CartId",
          "HMAC": "HMAC",
          "MergeCart": "MergeCart",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "Errors": {
          "Error": {
            "Code": "Code",
            "Message": "Message"
          }
        },
        "ItemLookupRequest": {
          "Condition": "All",
          "IdType": "ASIN",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "TruncateReviewsAt": 93,
          "VariationPage": "VariationPage"
        },
        "ItemSearchRequest": {
          "Availability": "Available",
          "Actor": "Actor",
          "Artist": "Artist",
          "AudienceRating": [
            "G"
          ],
          "Author": "Author",
          "Brand": "Brand",
          "BrowseNode": "BrowseNode",
          "Composer": "Composer",
          "Condition": "All",
          "Conductor": "Conductor",
          "Director": "Director",
          "IncludeReviewsSummary": "IncludeReviewsSummary",
          "ItemPage": 93,
          "Keywords": "Keywords",
          "Manufacturer": "Manufacturer",
          "MaximumPrice": 93,
          "MerchantId": "MerchantId",
          "MinPercentageOff": 93,
          "MinimumPrice": 93,
          "MusicLabel": "MusicLabel",
          "Orchestra": "Orchestra",
          "Power": "Power",
          "Publisher": "Publisher",
          "RelatedItemPage": "RelatedItemPage",
          "RelationshipType": [
            "RelationshipType"
          ],
          "ReleaseDate": "ReleaseDate",
          "ResponseGroup": [
            "ResponseGroup"
          ],
          "SearchIndex": "SearchIndex",
          "Sort": "Sort",
          "Title": "Title",
          "TruncateReviewsAt": 93
        },
        "SimilarityLookupRequest": {
          "Condition": "All",
          "SimilarityType": "Intersection",
          "ItemId": [
            "ItemId"
          ],
          "MerchantId": "MerchantId",
          "ResponseGroup": [
            "ResponseGroup"
          ]
        },
        "IsValid": "IsValid"
      },
      "SavedForLaterItems": {
        "SavedForLaterItem": [
          {
            "CartItemId": "CartItemId",
            "MetaData": {
              "KeyValuePair": {
                "Key": "Key",
                "Value": "Value"
              }
            },
            "Price": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 52,
              "CurrencyCode": "CurrencyCode"
            },
            "Quantity": "Quantity",
            "ASIN": "ASIN",
            "ItemTotal": {
              "FormattedPrice": "FormattedPrice",
              "Amount": 52,
              "CurrencyCode": "CurrencyCode"
            },
            "ProductGroup": "ProductGroup",
            "SellerNickname": "SellerNickname",
            "Title": "Title"
          }
        ],
        "SubTotal": {
          "FormattedPrice": "FormattedPrice",
          "Amount": 52,
          "CurrencyCode": "CurrencyCode"
        }
      },
      "SimilarProducts": {
        "SimilarProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SimilarViewedProducts": {
        "SimilarViewedProduct": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      },
      "SubTotal": {
        "FormattedPrice": "FormattedPrice",
        "Amount": 52,
        "CurrencyCode": "CurrencyCode"
      },
      "TopSellers": {
        "TopSeller": {
          "ASIN": "ASIN",
          "Title": "Title"
        }
      }
    },
    "OperationRequest": {
      "Arguments": {
        "Argument": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "Errors": {
        "Error": {
          "Code": "Code",
          "Message": "Message"
        }
      },
      "HTTPHeaders": {
        "Header": {
          "Name": "Name",
          "Value": "Value"
        }
      },
      "RequestId": "RequestId",
      "RequestProcessingTime": 52.2671295969128
    }
  }
}
```


[Back to API Reference](#api_reference)

## <a name="o_auth_authorization"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "OAuth Authorization") OAuth Authorization


### <a name="request_token"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token") request token


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token") refresh token


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token1") request token1


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token1") refresh token1


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token2"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token2") request token2


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token2"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token2") refresh token2


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token3"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token3") request token3


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token3"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token3") refresh token3


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token4"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token4") request token4


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token4"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token4") refresh token4


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token5"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token5") request token5


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token5"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token5") refresh token5


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token11") request token11


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token11") refresh token11


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token21"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token21") request token21


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token21"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token21") refresh token21


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token11") request token11


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 52,
  "scope": "scope",
  "expiry": 52,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token11") refresh token11


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 235,
  "scope": "scope",
  "expiry": 235,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token1") request token1


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"authorization_code"` | 
| code | [string](#api_types) |  ``` Required ```  | Authorization Code |  | 
| redirect_uri | [string](#api_types) |  ``` Required ```  | Redirect Uri |  | 

##### Example
```
 grant_type = authorization_code 
 code = "code" 
 redirect_uri = "redirect_uri" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 235,
  "scope": "scope",
  "expiry": 235,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token1") refresh token1


**`POST`** `/sdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.


#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| grant_type | [string](#api_types) |  ```Constant ```  ``` Required ```  | Grant Type | `"refresh_token"` | 
| refresh_token | [string](#api_types) |  ``` Required ```  | Refresh token |  | 
| scope | [string](#api_types) |  ``` Optional ```  | Requested scopes as a space-delimited list. |  | 

##### Example
```
 grant_type = refresh_token 
 refresh_token = "refresh_token" 
 scope = "scope" 
```

#### Responses
**200** 


Body ([OAuthToken](#o_auth_token)) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": 235,
  "scope": "scope",
  "expiry": 235,
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.

Body ([OAuthProvider](#o_auth_provider)) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


[Back to API Reference](#api_reference)

# API Types

This section provides details on the available types. The primitive types available are:

| Type | Example |
| ---- | -------- |
| **string** | `hello world` |
| **boolean** |	`true` |
| **number** | `1` |
| **precision** | `1.5` |
| **datetime** | `2016-03-13T12:52:32.123Z` |
| **date** | `2016-03-13` |
|**void** | |
| **dynamic** | |
| **binary** | |
| **long** | `12345678910` |
| **file** | |
| **uuid** | `0f8fad5b-d9cb-469f-a165-70867728950e` |


In addition to the above types, the API also uses complex types.
## <a name="non_negative_integer_with_units"></a>![Model: ](https://apidocs.io/img/method.png "NonNegativeIntegerWithUnits") NonNegativeIntegerWithUnits



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Units | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="merchant"></a>![Model: ](https://apidocs.io/img/method.png "Merchant") Merchant



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Name | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="search_results_map"></a>![Model: ](https://apidocs.io/img/method.png "SearchResultsMap") SearchResultsMap



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| SearchIndex | [SearchIndex](#search_index) |  ``` Required ```  | TODO: Add a property description | 




## <a name="ancestors"></a>![Model: ](https://apidocs.io/img/method.png "Ancestors") Ancestors



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| BrowseNode | [BrowseNode](#browse_node) |  ``` Required ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="children"></a>![Model: ](https://apidocs.io/img/method.png "Children") Children



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| BrowseNode | [BrowseNode](#browse_node) |  ``` Required ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="properties"></a>![Model: ](https://apidocs.io/img/method.png "Properties") Properties



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Property | [Property](#property) |  ``` Required ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="other_categories_similar_products"></a>![Model: ](https://apidocs.io/img/method.png "OtherCategoriesSimilarProducts") OtherCategoriesSimilarProducts



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| OtherCategoriesSimilarProduct | [OtherCategoriesSimilarProduct](#other_categories_similar_product) |  ``` Required ```  | TODO: Add a property description | 




## <a name="similar_viewed_products"></a>![Model: ](https://apidocs.io/img/method.png "SimilarViewedProducts") SimilarViewedProducts



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| SimilarViewedProduct | [SimilarViewedProduct](#similar_viewed_product) |  ``` Required ```  | TODO: Add a property description | 




## <a name="new_releases"></a>![Model: ](https://apidocs.io/img/method.png "NewReleases") NewReleases



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| NewRelease | [NewRelease](#new_release) |  ``` Required ```  | TODO: Add a property description | 




## <a name="top_sellers"></a>![Model: ](https://apidocs.io/img/method.png "TopSellers") TopSellers



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| TopSeller | [TopSeller](#top_seller) |  ``` Required ```  | TODO: Add a property description | 




## <a name="similar_products"></a>![Model: ](https://apidocs.io/img/method.png "SimilarProducts") SimilarProducts



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| SimilarProduct | [SimilarProduct](#similar_product) |  ``` Required ```  | TODO: Add a property description | 




## <a name="meta_data"></a>![Model: ](https://apidocs.io/img/method.png "MetaData") MetaData



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| KeyValuePair | [KeyValuePair](#key_value_pair) |  ``` Required ```  | TODO: Add a property description | 




## <a name="errors"></a>![Model: ](https://apidocs.io/img/method.png "Errors") Errors



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Error | [Error](#error) |  ``` Required ```  | TODO: Add a property description | 




## <a name="arguments"></a>![Model: ](https://apidocs.io/img/method.png "Arguments") Arguments



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Argument | [Argument](#argument) |  ``` Required ```  | TODO: Add a property description | 




## <a name="http_headers"></a>![Model: ](https://apidocs.io/img/method.png "HTTPHeaders") HTTPHeaders



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Header | [Header](#header) |  ``` Required ```  | TODO: Add a property description | 




## <a name="items"></a>![Model: ](https://apidocs.io/img/method.png "Items") Items



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Item | [Item](#item) |  ``` Required ```  | TODO: Add a property description | 




## <a name="availability"></a>![Model: ](https://apidocs.io/img/method.png "Availability") Availability



> TODO: Add a method description




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `Available` | TODO: Add description | 




## <a name="search_bin_sets"></a>![Model: ](https://apidocs.io/img/method.png "SearchBinSets") SearchBinSets



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| SearchBinSet | [SearchBinSet](#search_bin_set) |  ``` Required ```  | TODO: Add a property description | 




## <a name="bin_parameter"></a>![Model: ](https://apidocs.io/img/method.png "BinParameter") BinParameter



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Name | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Value | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="bin"></a>![Model: ](https://apidocs.io/img/method.png "Bin") Bin



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| BinItemCount | [number](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| BinName | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| BinParameter | [BinParameter](#bin_parameter) |  ``` Required ```  | TODO: Add a property description | 




## <a name="search_bin_set"></a>![Model: ](https://apidocs.io/img/method.png "SearchBinSet") SearchBinSet



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Bin | [Bin](#bin) |  ``` Required ```  | TODO: Add a property description | 
| NarrowBy | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="audience_rating"></a>![Model: ](https://apidocs.io/img/method.png "AudienceRating") AudienceRating



> TODO: Add a method description




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `G` | TODO: Add description | 
| `PG` | TODO: Add description | 
| `PG-13` | TODO: Add description | 
| `R` | TODO: Add description | 
| `NC-17` | TODO: Add description | 
| `NR` | TODO: Add description | 
| `Unrated` | TODO: Add description | 
| `6` | TODO: Add description | 
| `12` | TODO: Add description | 
| `16` | TODO: Add description | 
| `18` | TODO: Add description | 
| `FamilyViewing` | TODO: Add description | 




## <a name="condition"></a>![Model: ](https://apidocs.io/img/method.png "Condition") Condition



> TODO: Add a method description




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `All` | TODO: Add description | 
| `New` | TODO: Add description | 
| `Used` | TODO: Add description | 
| `Collectible` | TODO: Add description | 
| `Refurbished` | TODO: Add description | 




## <a name="item_search_request"></a>![Model: ](https://apidocs.io/img/method.png "ItemSearchRequest") ItemSearchRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Availability | [Availability](#availability) |  ``` Required ```  | TODO: Add a property description | 
| Actor | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Artist | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AudienceRating | [AudienceRating](#audience_rating) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Author | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Brand | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| BrowseNode | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Composer | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Condition | [Condition](#condition) |  ``` Optional ```  | TODO: Add a property description | 
| Conductor | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Director | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IncludeReviewsSummary | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ItemPage | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Keywords | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Manufacturer | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MaximumPrice | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MerchantId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MinPercentageOff | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MinimumPrice | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MusicLabel | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Orchestra | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Power | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Publisher | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RelatedItemPage | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RelationshipType | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| ReleaseDate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ResponseGroup | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| SearchIndex | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Sort | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TruncateReviewsAt | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="item_search"></a>![Model: ](https://apidocs.io/img/method.png "ItemSearch") ItemSearch



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AWSAccessKeyId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MarketplaceDomain | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [ItemSearchRequest](#item_search_request) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Shared | [ItemSearchRequest](#item_search_request) |  ``` Optional ```  | TODO: Add a property description | 
| Validate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| XMLEscaping | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="id_type"></a>![Model: ](https://apidocs.io/img/method.png "IdType") IdType



> TODO: Add a method description




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `ASIN` | TODO: Add description | 
| `UPC` | TODO: Add description | 
| `SKU` | TODO: Add description | 
| `EAN` | TODO: Add description | 
| `ISBN` | TODO: Add description | 




## <a name="item_lookup_request"></a>![Model: ](https://apidocs.io/img/method.png "ItemLookupRequest") ItemLookupRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Condition | [Condition](#condition) |  ``` Required ```  | TODO: Add a property description | 
| IdType | [IdType](#id_type) |  ``` Required ```  | TODO: Add a property description | 
| IncludeReviewsSummary | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ItemId | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| MerchantId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RelatedItemPage | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RelationshipType | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| ResponseGroup | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| SearchIndex | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TruncateReviewsAt | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| VariationPage | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="item_lookup"></a>![Model: ](https://apidocs.io/img/method.png "ItemLookup") ItemLookup



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AWSAccessKeyId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MarketplaceDomain | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [ItemLookupRequest](#item_lookup_request) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Shared | [ItemLookupRequest](#item_lookup_request) |  ``` Optional ```  | TODO: Add a property description | 
| Validate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| XMLEscaping | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="similarity_type"></a>![Model: ](https://apidocs.io/img/method.png "SimilarityType") SimilarityType



> TODO: Add a method description




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `Intersection` | TODO: Add description | 
| `Random` | TODO: Add description | 




## <a name="similarity_lookup_request"></a>![Model: ](https://apidocs.io/img/method.png "SimilarityLookupRequest") SimilarityLookupRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Condition | [Condition](#condition) |  ``` Required ```  | TODO: Add a property description | 
| SimilarityType | [SimilarityType](#similarity_type) |  ``` Required ```  | TODO: Add a property description | 
| ItemId | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| MerchantId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ResponseGroup | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="similarity_lookup"></a>![Model: ](https://apidocs.io/img/method.png "SimilarityLookup") SimilarityLookup



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AWSAccessKeyId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MarketplaceDomain | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [SimilarityLookupRequest](#similarity_lookup_request) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Shared | [SimilarityLookupRequest](#similarity_lookup_request) |  ``` Optional ```  | TODO: Add a property description | 
| Validate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| XMLEscaping | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="cart_get_request"></a>![Model: ](https://apidocs.io/img/method.png "CartGetRequest") CartGetRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| CartId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| HMAC | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MergeCart | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ResponseGroup | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="cart_get"></a>![Model: ](https://apidocs.io/img/method.png "CartGet") CartGet



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AWSAccessKeyId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MarketplaceDomain | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [CartGetRequest](#cart_get_request) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Shared | [CartGetRequest](#cart_get_request) |  ``` Optional ```  | TODO: Add a property description | 
| Validate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| XMLEscaping | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="item"></a>![Model: ](https://apidocs.io/img/method.png "Item") Item



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ListItemId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| OfferListingId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Quantity | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="cart_add_request"></a>![Model: ](https://apidocs.io/img/method.png "CartAddRequest") CartAddRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Items | [Items](#items) |  ``` Required ```  | TODO: Add a property description | 
| CartId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| HMAC | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MergeCart | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ResponseGroup | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="cart_add"></a>![Model: ](https://apidocs.io/img/method.png "CartAdd") CartAdd



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AWSAccessKeyId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MarketplaceDomain | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [CartAddRequest](#cart_add_request) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Shared | [CartAddRequest](#cart_add_request) |  ``` Optional ```  | TODO: Add a property description | 
| Validate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| XMLEscaping | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="cart_create_request"></a>![Model: ](https://apidocs.io/img/method.png "CartCreateRequest") CartCreateRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Items | [Items](#items) |  ``` Required ```  | TODO: Add a property description | 
| MergeCart | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ResponseGroup | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="cart_create"></a>![Model: ](https://apidocs.io/img/method.png "CartCreate") CartCreate



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AWSAccessKeyId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MarketplaceDomain | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [CartCreateRequest](#cart_create_request) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Shared | [CartCreateRequest](#cart_create_request) |  ``` Optional ```  | TODO: Add a property description | 
| Validate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| XMLEscaping | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="cart_modify_request"></a>![Model: ](https://apidocs.io/img/method.png "CartModifyRequest") CartModifyRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Items | [Items](#items) |  ``` Required ```  | TODO: Add a property description | 
| CartId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| HMAC | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MergeCart | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ResponseGroup | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="cart_modify"></a>![Model: ](https://apidocs.io/img/method.png "CartModify") CartModify



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AWSAccessKeyId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MarketplaceDomain | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [CartModifyRequest](#cart_modify_request) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Shared | [CartModifyRequest](#cart_modify_request) |  ``` Optional ```  | TODO: Add a property description | 
| Validate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| XMLEscaping | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="cart_clear_request"></a>![Model: ](https://apidocs.io/img/method.png "CartClearRequest") CartClearRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| CartId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| HMAC | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MergeCart | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ResponseGroup | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="cart_clear"></a>![Model: ](https://apidocs.io/img/method.png "CartClear") CartClear



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AWSAccessKeyId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MarketplaceDomain | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [CartClearRequest](#cart_clear_request) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Shared | [CartClearRequest](#cart_clear_request) |  ``` Optional ```  | TODO: Add a property description | 
| Validate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| XMLEscaping | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="browse_node_lookup_request"></a>![Model: ](https://apidocs.io/img/method.png "BrowseNodeLookupRequest") BrowseNodeLookupRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| BrowseNodeId | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| ResponseGroup | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="browse_node_lookup"></a>![Model: ](https://apidocs.io/img/method.png "BrowseNodeLookup") BrowseNodeLookup



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AWSAccessKeyId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AssociateTag | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MarketplaceDomain | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [BrowseNodeLookupRequest](#browse_node_lookup_request) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Shared | [BrowseNodeLookupRequest](#browse_node_lookup_request) |  ``` Optional ```  | TODO: Add a property description | 
| Validate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| XMLEscaping | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="header"></a>![Model: ](https://apidocs.io/img/method.png "Header") Header



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Name | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Value | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="argument"></a>![Model: ](https://apidocs.io/img/method.png "Argument") Argument



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Name | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Value | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="error"></a>![Model: ](https://apidocs.io/img/method.png "Error") Error



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Code | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Message | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="operation_request"></a>![Model: ](https://apidocs.io/img/method.png "OperationRequest") OperationRequest



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Arguments | [Arguments](#arguments) |  ``` Optional ```  | TODO: Add a property description | 
| Errors | [Errors](#errors) |  ``` Optional ```  | TODO: Add a property description | 
| HTTPHeaders | [HTTPHeaders](#http_headers) |  ``` Optional ```  | TODO: Add a property description | 
| RequestId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RequestProcessingTime | [precision](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="item_search_response"></a>![Model: ](https://apidocs.io/img/method.png "ItemSearchResponse") ItemSearchResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Items | [Items](#items) |  ``` Required ```  | TODO: Add a property description | 
| OperationRequest | [OperationRequest](#operation_request) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="item_lookup_response"></a>![Model: ](https://apidocs.io/img/method.png "ItemLookupResponse") ItemLookupResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Items | [Items](#items) |  ``` Required ```  | TODO: Add a property description | 
| OperationRequest | [OperationRequest](#operation_request) |  ``` Required ```  | TODO: Add a property description | 




## <a name="similarity_lookup_response"></a>![Model: ](https://apidocs.io/img/method.png "SimilarityLookupResponse") SimilarityLookupResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Items | [Items](#items) |  ``` Required ```  | TODO: Add a property description | 
| OperationRequest | [OperationRequest](#operation_request) |  ``` Required ```  | TODO: Add a property description | 




## <a name="request"></a>![Model: ](https://apidocs.io/img/method.png "Request") Request



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| BrowseNodeLookupRequest | [BrowseNodeLookupRequest](#browse_node_lookup_request) |  ``` Required ```  | TODO: Add a property description | 
| CartAddRequest | [CartAddRequest](#cart_add_request) |  ``` Required ```  | TODO: Add a property description | 
| CartClearRequest | [CartClearRequest](#cart_clear_request) |  ``` Required ```  | TODO: Add a property description | 
| CartCreateRequest | [CartCreateRequest](#cart_create_request) |  ``` Required ```  | TODO: Add a property description | 
| CartGetRequest | [CartGetRequest](#cart_get_request) |  ``` Required ```  | TODO: Add a property description | 
| CartModifyRequest | [CartModifyRequest](#cart_modify_request) |  ``` Required ```  | TODO: Add a property description | 
| Errors | [Errors](#errors) |  ``` Required ```  | TODO: Add a property description | 
| ItemLookupRequest | [ItemLookupRequest](#item_lookup_request) |  ``` Required ```  | TODO: Add a property description | 
| ItemSearchRequest | [ItemSearchRequest](#item_search_request) |  ``` Required ```  | TODO: Add a property description | 
| SimilarityLookupRequest | [SimilarityLookupRequest](#similarity_lookup_request) |  ``` Required ```  | TODO: Add a property description | 
| IsValid | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="price"></a>![Model: ](https://apidocs.io/img/method.png "Price") Price



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| FormattedPrice | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Amount | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| CurrencyCode | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="key_value_pair"></a>![Model: ](https://apidocs.io/img/method.png "KeyValuePair") KeyValuePair



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Key | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Value | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_item"></a>![Model: ](https://apidocs.io/img/method.png "CartItem") CartItem



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| CartItemId | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| MetaData | [MetaData](#meta_data) |  ``` Required ```  | TODO: Add a property description | 
| Price | [Price](#price) |  ``` Required ```  | TODO: Add a property description | 
| Quantity | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ItemTotal | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| ProductGroup | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| SellerNickname | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="cart_items"></a>![Model: ](https://apidocs.io/img/method.png "CartItems") CartItems



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| CartItem | [CartItem](#cart_item) |  ``` Required ```  ``` Collection ```  | TODO: Add a property description | 
| SubTotal | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="saved_for_later_items"></a>![Model: ](https://apidocs.io/img/method.png "SavedForLaterItems") SavedForLaterItems



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| SavedForLaterItem | [CartItem](#cart_item) |  ``` Required ```  ``` Collection ```  | TODO: Add a property description | 
| SubTotal | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="similar_product"></a>![Model: ](https://apidocs.io/img/method.png "SimilarProduct") SimilarProduct



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="top_seller"></a>![Model: ](https://apidocs.io/img/method.png "TopSeller") TopSeller



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="new_release"></a>![Model: ](https://apidocs.io/img/method.png "NewRelease") NewRelease



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="similar_viewed_product"></a>![Model: ](https://apidocs.io/img/method.png "SimilarViewedProduct") SimilarViewedProduct



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="other_categories_similar_product"></a>![Model: ](https://apidocs.io/img/method.png "OtherCategoriesSimilarProduct") OtherCategoriesSimilarProduct



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="cart"></a>![Model: ](https://apidocs.io/img/method.png "Cart") Cart



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| CartId | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| HMAC | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| URLEncodedHMAC | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| CartItems | [CartItems](#cart_items) |  ``` Optional ```  | TODO: Add a property description | 
| MobileCartURL | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| NewReleases | [NewReleases](#new_releases) |  ``` Optional ```  | TODO: Add a property description | 
| OtherCategoriesSimilarProducts | [OtherCategoriesSimilarProducts](#other_categories_similar_products) |  ``` Optional ```  | TODO: Add a property description | 
| PurchaseURL | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Request | [Request](#request) |  ``` Optional ```  | TODO: Add a property description | 
| SavedForLaterItems | [SavedForLaterItems](#saved_for_later_items) |  ``` Optional ```  | TODO: Add a property description | 
| SimilarProducts | [SimilarProducts](#similar_products) |  ``` Optional ```  | TODO: Add a property description | 
| SimilarViewedProducts | [SimilarViewedProducts](#similar_viewed_products) |  ``` Optional ```  | TODO: Add a property description | 
| SubTotal | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| TopSellers | [TopSellers](#top_sellers) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="cart_get_response"></a>![Model: ](https://apidocs.io/img/method.png "CartGetResponse") CartGetResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| OperationRequest | [OperationRequest](#operation_request) |  ``` Required ```  | TODO: Add a property description | 
| Cart | [Cart](#cart) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="cart_add_response"></a>![Model: ](https://apidocs.io/img/method.png "CartAddResponse") CartAddResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Cart | [Cart](#cart) |  ``` Required ```  | TODO: Add a property description | 
| OperationRequest | [OperationRequest](#operation_request) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_create_response"></a>![Model: ](https://apidocs.io/img/method.png "CartCreateResponse") CartCreateResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Cart | [Cart](#cart) |  ``` Required ```  | TODO: Add a property description | 
| OperationRequest | [OperationRequest](#operation_request) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_modify_response"></a>![Model: ](https://apidocs.io/img/method.png "CartModifyResponse") CartModifyResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Cart | [Cart](#cart) |  ``` Required ```  | TODO: Add a property description | 
| OperationRequest | [OperationRequest](#operation_request) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_clear_response"></a>![Model: ](https://apidocs.io/img/method.png "CartClearResponse") CartClearResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Cart | [Cart](#cart) |  ``` Required ```  | TODO: Add a property description | 
| OperationRequest | [OperationRequest](#operation_request) |  ``` Required ```  | TODO: Add a property description | 




## <a name="property"></a>![Model: ](https://apidocs.io/img/method.png "Property") Property



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Name | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Value | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="top_item"></a>![Model: ](https://apidocs.io/img/method.png "TopItem") TopItem



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Actor | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Artist | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Author | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| DetailPageURL | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ProductGroup | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="top_item_set"></a>![Model: ](https://apidocs.io/img/method.png "TopItemSet") TopItemSet



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| TopItem | [TopItem](#top_item) |  ``` Required ```  | TODO: Add a property description | 
| Type | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="browse_node"></a>![Model: ](https://apidocs.io/img/method.png "BrowseNode") BrowseNode



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Ancestors | [Ancestors](#ancestors) |  ``` Required ```  | TODO: Add a property description | 
| Children | [Children](#children) |  ``` Required ```  | TODO: Add a property description | 
| NewReleases | [NewReleases](#new_releases) |  ``` Required ```  | TODO: Add a property description | 
| Properties | [Properties](#properties) |  ``` Required ```  | TODO: Add a property description | 
| TopSellers | [TopSellers](#top_sellers) |  ``` Required ```  | TODO: Add a property description | 
| BrowseNodeId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsCategoryRoot | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Name | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TopItemSet | [TopItemSet](#top_item_set) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="browse_nodes"></a>![Model: ](https://apidocs.io/img/method.png "BrowseNodes") BrowseNodes



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Request | [Request](#request) |  ``` Required ```  | TODO: Add a property description | 
| BrowseNode | [BrowseNode](#browse_node) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="browse_node_lookup_response"></a>![Model: ](https://apidocs.io/img/method.png "BrowseNodeLookupResponse") BrowseNodeLookupResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| OperationRequest | [OperationRequest](#operation_request) |  ``` Required ```  | TODO: Add a property description | 
| BrowseNodes | [BrowseNodes](#browse_nodes) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="corrected_query"></a>![Model: ](https://apidocs.io/img/method.png "CorrectedQuery") CorrectedQuery



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Keywords | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Message | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="search_index"></a>![Model: ](https://apidocs.io/img/method.png "SearchIndex") SearchIndex



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Required ```  ``` Collection ```  | TODO: Add a property description | 
| CorrectedQuery | [CorrectedQuery](#corrected_query) |  ``` Required ```  | TODO: Add a property description | 
| IndexName | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| RelevanceRank | [number](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Pages | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Results | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="rental_listing"></a>![Model: ](https://apidocs.io/img/method.png "RentalListing") RentalListing



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Price | [Price](#price) |  ``` Required ```  | TODO: Add a property description | 
| Disclaimer | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsFulfilledByAmazon | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Period | [NonNegativeIntegerWithUnits](#non_negative_integer_with_units) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="rental_offer"></a>![Model: ](https://apidocs.io/img/method.png "RentalOffer") RentalOffer



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Merchant | [Merchant](#merchant) |  ``` Optional ```  | TODO: Add a property description | 
| RentalListing | [RentalListing](#rental_listing) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="rental_offers"></a>![Model: ](https://apidocs.io/img/method.png "RentalOffers") RentalOffers



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| RentalOffer | [RentalOffer](#rental_offer) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="item_link"></a>![Model: ](https://apidocs.io/img/method.png "ItemLink") ItemLink



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Description | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| URL | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="item_links"></a>![Model: ](https://apidocs.io/img/method.png "ItemLinks") ItemLinks



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ItemLink | [ItemLink](#item_link) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="relationship"></a>![Model: ](https://apidocs.io/img/method.png "Relationship") Relationship



> TODO: Add a method description




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `Parents` | TODO: Add description | 
| `Children` | TODO: Add description | 




## <a name="related_item"></a>![Model: ](https://apidocs.io/img/method.png "RelatedItem") RelatedItem



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Item | [Item](#item) |  ``` Required ```  | TODO: Add a property description | 




## <a name="related_items"></a>![Model: ](https://apidocs.io/img/method.png "RelatedItems") RelatedItems



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Relationship | [Relationship](#relationship) |  ``` Required ```  | TODO: Add a property description | 
| RelatedItem | [RelatedItem](#related_item) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| RelatedItemCount | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RelatedItemPage | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RelatedItemPageCount | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RelationshipType | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="offer_summary"></a>![Model: ](https://apidocs.io/img/method.png "OfferSummary") OfferSummary



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| LowestCollectiblePrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| LowestNewPrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| LowestRefurbishedPrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| LowestUsedPrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| TotalCollectible | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TotalNew | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TotalRefurbished | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TotalUsed | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="offer_attributes"></a>![Model: ](https://apidocs.io/img/method.png "OfferAttributes") OfferAttributes



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Condition | [Condition](#condition) |  ``` Required ```  | TODO: Add a property description | 




## <a name="availability_attributes"></a>![Model: ](https://apidocs.io/img/method.png "AvailabilityAttributes") AvailabilityAttributes



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AvailabilityType | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsPreorder | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MaximumHours | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MinimumHours | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="offer_listing"></a>![Model: ](https://apidocs.io/img/method.png "OfferListing") OfferListing



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Availability | [Availability](#availability) |  ``` Required ```  | TODO: Add a property description | 
| AvailabilityAttributes | [AvailabilityAttributes](#availability_attributes) |  ``` Required ```  | TODO: Add a property description | 
| Price | [Price](#price) |  ``` Required ```  | TODO: Add a property description | 
| AmountSaved | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| IsEligibleForPrime | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsEligibleForPrimeFreeDigitalVideo | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsEligibleForSuperSaverShipping | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| OfferListingId | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| PercentageSaved | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| PricePerUnit | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| SalePrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="loyalty_points"></a>![Model: ](https://apidocs.io/img/method.png "LoyaltyPoints") LoyaltyPoints



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Points | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TypicalRedemptionValue | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="summary"></a>![Model: ](https://apidocs.io/img/method.png "Summary") Summary



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| PromotionId | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| BenefitDescription | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Category | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| EligibilityRequirementDescription | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| EndDate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Message | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| StartDate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TermsAndConditions | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="promotion"></a>![Model: ](https://apidocs.io/img/method.png "Promotion") Promotion



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Summary | [Summary](#summary) |  ``` Required ```  | TODO: Add a property description | 




## <a name="promotions"></a>![Model: ](https://apidocs.io/img/method.png "Promotions") Promotions



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Promotion | [Promotion](#promotion) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="offer"></a>![Model: ](https://apidocs.io/img/method.png "Offer") Offer



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Merchant | [Merchant](#merchant) |  ``` Required ```  | TODO: Add a property description | 
| LoyaltyPoints | [LoyaltyPoints](#loyalty_points) |  ``` Optional ```  | TODO: Add a property description | 
| OfferAttributes | [OfferAttributes](#offer_attributes) |  ``` Optional ```  | TODO: Add a property description | 
| OfferListing | [OfferListing](#offer_listing) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Promotions | [Promotions](#promotions) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="offers"></a>![Model: ](https://apidocs.io/img/method.png "Offers") Offers



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| MoreOffersUrl | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Offer | [Offer](#offer) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| TotalOfferPages | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TotalOffers | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="variation_attribute"></a>![Model: ](https://apidocs.io/img/method.png "VariationAttribute") VariationAttribute



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Name | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Value | [string](#api_types) |  ``` Required ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="variation_summary"></a>![Model: ](https://apidocs.io/img/method.png "VariationSummary") VariationSummary



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| HighestPrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| HighestSalePrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| LowestPrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| LowestSalePrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="variation_dimensions"></a>![Model: ](https://apidocs.io/img/method.png "VariationDimensions") VariationDimensions



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| VariationDimension | [string](#api_types) |  ``` Required ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="variations"></a>![Model: ](https://apidocs.io/img/method.png "Variations") Variations



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Item | [Item](#item) |  ``` Required ```  | TODO: Add a property description | 
| TotalVariationPages | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TotalVariations | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| VariationDimensions | [VariationDimensions](#variation_dimensions) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="editorial_review"></a>![Model: ](https://apidocs.io/img/method.png "EditorialReview") EditorialReview



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Content | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsLinkSuppressed | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Source | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="editorial_reviews"></a>![Model: ](https://apidocs.io/img/method.png "EditorialReviews") EditorialReviews



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| EditorialReview | [EditorialReview](#editorial_review) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="collection_summary"></a>![Model: ](https://apidocs.io/img/method.png "CollectionSummary") CollectionSummary



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| HighestListPrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| HighestSalePrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| LowestListPrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| LowestSalePrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="collection_parent"></a>![Model: ](https://apidocs.io/img/method.png "CollectionParent") CollectionParent



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="collection_item"></a>![Model: ](https://apidocs.io/img/method.png "CollectionItem") CollectionItem



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="collection"></a>![Model: ](https://apidocs.io/img/method.png "Collection") Collection



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| CollectionItem | [CollectionItem](#collection_item) |  ``` Required ```  | TODO: Add a property description | 
| CollectionParent | [CollectionParent](#collection_parent) |  ``` Required ```  | TODO: Add a property description | 
| CollectionSummary | [CollectionSummary](#collection_summary) |  ``` Required ```  | TODO: Add a property description | 




## <a name="collections"></a>![Model: ](https://apidocs.io/img/method.png "Collections") Collections



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Collection | [Collection](#collection) |  ``` Required ```  | TODO: Add a property description | 




## <a name="customer_reviews"></a>![Model: ](https://apidocs.io/img/method.png "CustomerReviews") CustomerReviews



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| HasReviews | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IFrameURL | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="track"></a>![Model: ](https://apidocs.io/img/method.png "Track") Track



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Number | [number](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="disc"></a>![Model: ](https://apidocs.io/img/method.png "Disc") Disc



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Number | [number](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Track | [Track](#track) |  ``` Required ```  | TODO: Add a property description | 




## <a name="tracks"></a>![Model: ](https://apidocs.io/img/method.png "Tracks") Tracks



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Disc | [Disc](#disc) |  ``` Required ```  | TODO: Add a property description | 




## <a name="accessory"></a>![Model: ](https://apidocs.io/img/method.png "Accessory") Accessory



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| ASIN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="accessories"></a>![Model: ](https://apidocs.io/img/method.png "Accessories") Accessories



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Accessory | [Accessory](#accessory) |  ``` Required ```  | TODO: Add a property description | 




## <a name="decimal_with_units"></a>![Model: ](https://apidocs.io/img/method.png "DecimalWithUnits") DecimalWithUnits



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Units | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="image"></a>![Model: ](https://apidocs.io/img/method.png "Image") Image



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Height | [DecimalWithUnits](#decimal_with_units) |  ``` Required ```  | TODO: Add a property description | 
| URL | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| Width | [DecimalWithUnits](#decimal_with_units) |  ``` Required ```  | TODO: Add a property description | 
| IsVerified | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="image_set"></a>![Model: ](https://apidocs.io/img/method.png "ImageSet") ImageSet



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Category | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| HiResImage | [Image](#image) |  ``` Optional ```  | TODO: Add a property description | 
| LargeImage | [Image](#image) |  ``` Optional ```  | TODO: Add a property description | 
| MediumImage | [Image](#image) |  ``` Optional ```  | TODO: Add a property description | 
| SmallImage | [Image](#image) |  ``` Optional ```  | TODO: Add a property description | 
| SwatchImage | [Image](#image) |  ``` Optional ```  | TODO: Add a property description | 
| ThumbnailImage | [Image](#image) |  ``` Optional ```  | TODO: Add a property description | 
| TinyImage | [Image](#image) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="catalog_number_list"></a>![Model: ](https://apidocs.io/img/method.png "CatalogNumberList") CatalogNumberList



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| CatalogNumberListElement | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="creator"></a>![Model: ](https://apidocs.io/img/method.png "Creator") Creator



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Role | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="ean_list"></a>![Model: ](https://apidocs.io/img/method.png "EANList") EANList



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| EANListElement | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="item_dimensions"></a>![Model: ](https://apidocs.io/img/method.png "ItemDimensions") ItemDimensions



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Height | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| Length | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| Weight | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| Width | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="language"></a>![Model: ](https://apidocs.io/img/method.png "Language") Language



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Name | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| AudioFormat | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Type | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="languages"></a>![Model: ](https://apidocs.io/img/method.png "Languages") Languages



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Language | [Language](#language) |  ``` Required ```  | TODO: Add a property description | 




## <a name="package_dimensions"></a>![Model: ](https://apidocs.io/img/method.png "PackageDimensions") PackageDimensions



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Height | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| Length | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| Weight | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| Width | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="upc_list"></a>![Model: ](https://apidocs.io/img/method.png "UPCList") UPCList



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| UPCListElement | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 




## <a name="item_attributes"></a>![Model: ](https://apidocs.io/img/method.png "ItemAttributes") ItemAttributes



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| AudienceRating | [AudienceRating](#audience_rating) |  ``` Required ```  | TODO: Add a property description | 
| CatalogNumberList | [CatalogNumberList](#catalog_number_list) |  ``` Required ```  | TODO: Add a property description | 
| Creator | [Creator](#creator) |  ``` Required ```  | TODO: Add a property description | 
| EANList | [EANList](#ean_list) |  ``` Required ```  | TODO: Add a property description | 
| ItemDimensions | [ItemDimensions](#item_dimensions) |  ``` Required ```  | TODO: Add a property description | 
| Languages | [Languages](#languages) |  ``` Required ```  | TODO: Add a property description | 
| PackageDimensions | [PackageDimensions](#package_dimensions) |  ``` Required ```  | TODO: Add a property description | 
| UPCList | [UPCList](#upc_list) |  ``` Required ```  | TODO: Add a property description | 
| Actor | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Artist | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| AspectRatio | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| AudioFormat | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Author | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Binding | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Brand | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| CEROAgeRating | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Category | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| ClothingSize | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Color | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Department | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Director | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| EAN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| EISBN | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| ESRBAgeRating | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Edition | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| EnergyEfficiencyClass | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| EpisodeSequence | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Feature | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Format | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Genre | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| HardwarePlatform | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| HazardousMaterialType | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ISBN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsAdultProduct | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsAutographed | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsEligibleForTradeIn | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IsMemorabilia | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| IssuesPerYear | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ItemPartNumber | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Label | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| LegalDisclaimer | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ListPrice | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| MPN | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MagazineType | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Manufacturer | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ManufacturerMaximumAge | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| ManufacturerMinimumAge | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| ManufacturerPartsWarrantyDescription | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| MediaType | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Model | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ModelYear | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| NumberOfDiscs | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| NumberOfIssues | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| NumberOfItems | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| NumberOfPages | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| NumberOfTracks | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| OperatingSystem | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| PackageQuantity | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| PartNumber | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| PictureFormat | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| Platform | [string](#api_types) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| ProductGroup | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ProductTypeName | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ProductTypeSubcategory | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| PublicationDate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Publisher | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RegionCode | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| ReleaseDate | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| RunningTime | [DecimalWithUnits](#decimal_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| SKU | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| SeasonSequence | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| SeikodoProductCode | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Size | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| Studio | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| SubscriptionLength | [NonNegativeIntegerWithUnits](#non_negative_integer_with_units) |  ``` Optional ```  | TODO: Add a property description | 
| Title | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TrackSequence | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| TradeInValue | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| UPC | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| WEEETaxValue | [Price](#price) |  ``` Optional ```  | TODO: Add a property description | 
| Warranty | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




## <a name="string_with_units"></a>![Model: ](https://apidocs.io/img/method.png "StringWithUnits") StringWithUnits



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| Units | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 




## <a name="item_search_response_msg"></a>![Model: ](https://apidocs.io/img/method.png "ItemSearchResponseMsg") ItemSearchResponseMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [ItemSearchResponse](#item_search_response) |  ``` Required ```  | TODO: Add a property description | 




## <a name="item_lookup_response_msg"></a>![Model: ](https://apidocs.io/img/method.png "ItemLookupResponseMsg") ItemLookupResponseMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [ItemLookupResponse](#item_lookup_response) |  ``` Required ```  | TODO: Add a property description | 




## <a name="browse_node_lookup_response_msg"></a>![Model: ](https://apidocs.io/img/method.png "BrowseNodeLookupResponseMsg") BrowseNodeLookupResponseMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [BrowseNodeLookupResponse](#browse_node_lookup_response) |  ``` Required ```  | TODO: Add a property description | 




## <a name="similarity_lookup_response_msg"></a>![Model: ](https://apidocs.io/img/method.png "SimilarityLookupResponseMsg") SimilarityLookupResponseMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [SimilarityLookupResponse](#similarity_lookup_response) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_get_response_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartGetResponseMsg") CartGetResponseMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartGetResponse](#cart_get_response) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_add_response_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartAddResponseMsg") CartAddResponseMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartAddResponse](#cart_add_response) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_create_response_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartCreateResponseMsg") CartCreateResponseMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartCreateResponse](#cart_create_response) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_modify_response_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartModifyResponseMsg") CartModifyResponseMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartModifyResponse](#cart_modify_response) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_clear_response_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartClearResponseMsg") CartClearResponseMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartClearResponse](#cart_clear_response) |  ``` Required ```  | TODO: Add a property description | 




## <a name="item_search_request_msg"></a>![Model: ](https://apidocs.io/img/method.png "ItemSearchRequestMsg") ItemSearchRequestMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [ItemSearch](#item_search) |  ``` Required ```  | TODO: Add a property description | 




## <a name="item_lookup_request_msg"></a>![Model: ](https://apidocs.io/img/method.png "ItemLookupRequestMsg") ItemLookupRequestMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [ItemLookup](#item_lookup) |  ``` Required ```  | TODO: Add a property description | 




## <a name="browse_node_lookup_request_msg"></a>![Model: ](https://apidocs.io/img/method.png "BrowseNodeLookupRequestMsg") BrowseNodeLookupRequestMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [BrowseNodeLookup](#browse_node_lookup) |  ``` Required ```  | TODO: Add a property description | 




## <a name="similarity_lookup_request_msg"></a>![Model: ](https://apidocs.io/img/method.png "SimilarityLookupRequestMsg") SimilarityLookupRequestMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [SimilarityLookup](#similarity_lookup) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_get_request_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartGetRequestMsg") CartGetRequestMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartGet](#cart_get) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_add_request_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartAddRequestMsg") CartAddRequestMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartAdd](#cart_add) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_create_request_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartCreateRequestMsg") CartCreateRequestMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartCreate](#cart_create) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_modify_request_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartModifyRequestMsg") CartModifyRequestMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartModify](#cart_modify) |  ``` Required ```  | TODO: Add a property description | 




## <a name="cart_clear_request_msg"></a>![Model: ](https://apidocs.io/img/method.png "CartClearRequestMsg") CartClearRequestMsg



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| body | [CartClear](#cart_clear) |  ``` Required ```  | TODO: Add a property description | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




## <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `asdasd` | TODO: Add description | 




## <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 
| refresh_token | [string](#api_types) |  ``` Optional ```  | Refresh token<br>Used to get a new access token when it expires. | 




## <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




## <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 





