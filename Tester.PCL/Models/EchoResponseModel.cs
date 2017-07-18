/*
 * Tester.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.IO;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using APIMATIC.SDK.Common;


namespace Tester.PCL.Models
{
    public class EchoResponseModel : BaseModel 
    {
        // These fields hold the values for the public properties.
        private object body;
        private Dictionary<string, string> headers;
        private string method;
        private string path;
        private Dictionary<string, Models.QueryParameterModel> query;
        private int? uploadCount;

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("body")]
        public object Body 
        { 
            get 
            {
                return this.body; 
            } 
            set 
            {
                this.body = value;
                onPropertyChanged("Body");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("headers")]
        public Dictionary<string, string> Headers 
        { 
            get 
            {
                return this.headers; 
            } 
            set 
            {
                this.headers = value;
                onPropertyChanged("Headers");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("method")]
        public string Method 
        { 
            get 
            {
                return this.method; 
            } 
            set 
            {
                this.method = value;
                onPropertyChanged("Method");
            }
        }

        /// <summary>
        /// relativePath
        /// </summary>
        [JsonProperty("path")]
        public string Path 
        { 
            get 
            {
                return this.path; 
            } 
            set 
            {
                this.path = value;
                onPropertyChanged("Path");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("query")]
        public Dictionary<string, Models.QueryParameterModel> Query 
        { 
            get 
            {
                return this.query; 
            } 
            set 
            {
                this.query = value;
                onPropertyChanged("Query");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("uploadCount")]
        public int? UploadCount 
        { 
            get 
            {
                return this.uploadCount; 
            } 
            set 
            {
                this.uploadCount = value;
                onPropertyChanged("UploadCount");
            }
        }
    }
} 