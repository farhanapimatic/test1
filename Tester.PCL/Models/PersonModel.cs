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
    [JsonConverter(typeof(PersonModelCreationConverter))]
    public class PersonModel : BaseModel 
    {
        // These fields hold the values for the public properties.
        private string address;
        private long age;
        private DateTime birthday;
        private DateTime birthtime;
        private string name;
        private string uid;
        private string personType;

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("address")]
        public string Address 
        { 
            get 
            {
                return this.address; 
            } 
            set 
            {
                this.address = value;
                onPropertyChanged("Address");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("age")]
        public long Age 
        { 
            get 
            {
                return this.age; 
            } 
            set 
            {
                this.age = value;
                onPropertyChanged("Age");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonConverter(typeof(CustomDateTimeConverter), "yyyy'-'MM'-'dd")]
        [JsonProperty("birthday")]
        public DateTime Birthday 
        { 
            get 
            {
                return this.birthday; 
            } 
            set 
            {
                this.birthday = value;
                onPropertyChanged("Birthday");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonConverter(typeof(IsoDateTimeConverter))]
        [JsonProperty("birthtime")]
        public DateTime Birthtime 
        { 
            get 
            {
                return this.birthtime; 
            } 
            set 
            {
                this.birthtime = value;
                onPropertyChanged("Birthtime");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("name")]
        public string Name 
        { 
            get 
            {
                return this.name; 
            } 
            set 
            {
                this.name = value;
                onPropertyChanged("Name");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("uid")]
        public string Uid 
        { 
            get 
            {
                return this.uid; 
            } 
            set 
            {
                this.uid = value;
                onPropertyChanged("Uid");
            }
        }

        /// <summary>
        /// TODO: Write general description for this method
        /// </summary>
        [JsonProperty("personType")]
        public string PersonType 
        { 
            get 
            {
                return this.personType; 
            } 
            set 
            {
                this.personType = value;
                onPropertyChanged("PersonType");
            }
        }
    }
} 