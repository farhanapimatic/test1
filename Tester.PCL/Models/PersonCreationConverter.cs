/*
 * Tester.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using APIMATIC.SDK.Common;
using System;
using System.Collections.Generic;

namespace Tester.PCL.Models
{
    class PersonCreationConverter : JsonCreationConverter<Person>
    {
        public PersonCreationConverter()
        {
            typeName = "personType";
            dic = new Dictionary<string, Type>()
            {
                { "Empl",typeof(Employee)},
                { "Boss",typeof(Boss)},
            };
        }
    }
}