#set ($typehint = ${TYPE_HINT})
#if ($typehint.contains('[]'))
    #set ($typehint = 'array')
/**
 * @return ${TYPE_HINT}
 */
#end
public ${STATIC} function ${GET_OR_IS}${NAME}(): $typehint
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}