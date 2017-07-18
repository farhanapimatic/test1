/*
 * Tester.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.Collections.Generic;
using APIMATIC.SDK.Common;

namespace Tester.PCL.Models
{
    class PersonModelCreationConverter : JsonCreationConverter<PersonModel>
    {
        public PersonModelCreationConverter()
        {
            typeName = "personType";
            dic = new Dictionary<string, Type>()
            {
                { "Empl",typeof(EmployeeModel)},
                { "Boss",typeof(BossModel)},
            };
        }
    }
}