# 



## Base URL

The Base URL for this API is `http://adsabs.harvard.edu/`






# <a name="api_reference"></a>API Reference

* [BibcodeQueryBinding](#bibcode_query_binding)

## <a name="bibcode_query_binding"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "BibcodeQueryBinding") BibcodeQueryBinding


### <a name="get_bibcode"></a>![Endpoint: ](https://apidocs.io/img/method.png "getBibcode") getBibcode


**`GET`** `/cgi-bin/nph-bib_query`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| bibcode | `string` |  ``` Required ```  | TODO: Add a parameter description | `"bibcode"` | 
| db_key | `string` |  ``` Required ```  | TODO: Add a parameter description | `"db_key"` | 
| data_type | `string` |  ``` Required ```  | TODO: Add a parameter description | `"data_type"` | 

#### Responses
**200** 

Body (_returnBibcode_) 
```
{
  "body": "body"
}
```


[Back to API Reference](#api_reference)

