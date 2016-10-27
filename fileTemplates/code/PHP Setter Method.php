#set ($typehint = ${TYPE_HINT})
#if ($typehint.contains('[]'))
    #set ($typehint = 'array')
/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 * @return ${CLASS_NAME}
 */
#end
public ${STATIC} function set${NAME}($typehint $${PARAM_NAME}): ${CLASS_NAME} 
{
#if (${STATIC} == "static")
   self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
   return $this;
#end
}