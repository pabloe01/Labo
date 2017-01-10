/**
 * Plugins para DataTables.
 */
if (!_.isUndefined($) && !_.isUndefined($.fn.dataTableExt)) {

    /**
     * Detecta fechas en formato europeo (dd/mm/yyyy), y las etiqueta como tipo 'date-eu'.
     */
    $.fn.dataTableExt.aTypes.unshift(function (data) {
        if (!_.isUndefined(data) && !_.isNull(data) && _.isString(data) && data.match(/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/(19|20|21)\d\d$/)) {
            return 'date-eu';
        }
        return null;
    });

    /**
     * Ordenamiento de las columas de tipo 'date-eu'.
     */
    $.fn.extend($.fn.dataTableExt.oSort, {
        'date-eu-pre' : function (date) {
            if (_.isUndefined(date)) {
                return 0;
            }

            var dateAsMoment = moment(date, 'DD/MM/YYYY');
            return dateAsMoment.unix();
        }
    });
}