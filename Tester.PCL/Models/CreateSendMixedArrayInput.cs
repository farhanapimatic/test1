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
using APIMATIC.SDK.Http.Client;
using APIMATIC.SDK.Common;


namespace Tester.PCL.Models
{
    public class CreateSendMixedArrayInput : BaseModel 
    {
        // These fields hold the values for the public properties.
        private FileStreamInfo file;
        private List<int> integers;
        private List<Models.EmployeeModel> models;
        private List<string> strings;

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("file")]
        public FileStreamInfo File 
        { 
            get 
            {
                return this.file; 
            } 
            set 
            {
                this.file = value;
                onPropertyChanged("File");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("integers")]
        public List<int> Integers 
        { 
            get 
            {
                return this.integers; 
            } 
            set 
            {
                this.integers = value;
                onPropertyChanged("Integers");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("models")]
        public List<Models.EmployeeModel> Models 
        { 
            get 
            {
                return this.models; 
            } 
            set 
            {
                this.models = value;
                onPropertyChanged("Models");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("strings")]
        public List<string> Strings 
        { 
            get 
            {
                return this.strings; 
            } 
            set 
            {
                this.strings = value;
                onPropertyChanged("Strings");
            }
        }
    }
} 